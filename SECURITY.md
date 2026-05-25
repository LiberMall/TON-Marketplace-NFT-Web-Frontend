# Security Policy

This is a **reference front-end** with no production payload of its own. Vulnerabilities here mainly come down to XSS / CSRF in the rendered HTML if you fork the code and wire it to real data. We still want to hear about them.

## Reporting a vulnerability

If you discover a security issue **do not open a public GitHub issue**. Use one of these private channels:

| Channel | Use it for |
|---|---|
| **Email**: [`security@libermall.com`](mailto:security@libermall.com) | Most reports. PGP key on request. |
| **GitHub Security Advisory** | Private coordinated disclosure via the *Security* tab. |
| **Telegram** to [@LibermallIDbot](https://t.me/LibermallIDbot) → `/security` | Quick disclosure with screenshots. |

We acknowledge reports within **48 hours**, triage within **5 business days**, and aim to ship a fix within **30 days** for high-severity issues.

## Scope

In scope:

- This source code repository
- The hosted static demo at [`libermall.github.io/TON-Marketplace-NFT-Web-Frontend/`](https://libermall.github.io/TON-Marketplace-NFT-Web-Frontend/)

Out of scope:

- The production Libermall marketplace at [`libermall.com`](https://libermall.com) — report to the global Libermall security contact instead
- The on-chain marketplace contracts — report to [`LiberMall/Contracts`](https://github.com/LiberMall/Contracts) or `security@libermall.com`
- Forks of this front-end under other accounts — please report to fork owners directly

## Safe-harbor

We won't pursue legal action against researchers who:

1. Make good-faith effort to avoid privacy violations and service degradation.
2. Don't exfiltrate data beyond what's needed to prove the issue.
3. Give us reasonable time to remediate before public disclosure (typically 90 days).
4. Don't exploit the issue for personal gain.

## Hall of fame

Researchers who report valid vulnerabilities will be credited (with consent) in [`CHANGELOG.md`](CHANGELOG.md) and on [`id.libermall.com/security.html`](https://id.libermall.com/security.html).
