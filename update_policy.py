import json
import os

filepath = '/root/.openclaw/openclaw.json'
with open(filepath, 'r') as f:
    config = json.load(f)

buchi_account = config.get('channels', {}).get('telegram', {}).get('accounts', {}).get('buchi', {})
if 'dmPolicy' in buchi_account:
    buchi_account['dmPolicy'] = 'allowlist'
    buchi_account['allowFrom'] = ['8420823805']

with open(filepath, 'w') as f:
    json.dump(config, f, indent=2)

print("Policy updated successfully.")
