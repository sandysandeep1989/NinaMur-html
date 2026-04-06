import re

with open('orders-listing.php', 'r') as f:
    content = f.read()

# 1st Payment Confirmed = 1st checkbox td after the proforma td
payment_colors = [
    'green', 'red', 'green', 'green',   # rows 1-4
    'red', 'green', 'red', 'green',     # rows 5-8
    'red', 'green', 'green', 'red',     # rows 9-12
]

# Find proforma td followed by the 1st checkbox td
pattern = re.compile(
    r'(ol-td-proforma--(?:green|red)"></td>\s*)'
    r'<td class="ol-td-center"><input type="checkbox" class="ol-checkbox"(?: checked)?></td>'
)

matches = list(pattern.finditer(content))
print(f"Found {len(matches)} 1st Payment Confirmed tds")

for i in range(len(matches) - 1, -1, -1):
    match = matches[i]
    color = payment_colors[i]
    prefix = match.group(1)
    replacement = f'{prefix}<td class="ol-td-center ol-td-proforma--{color}"></td>'
    content = content[:match.start()] + replacement + content[match.end():]

with open('orders-listing.php', 'w') as f:
    f.write(content)

print(f"Green: {payment_colors.count('green')}, Red: {payment_colors.count('red')}")
