<div align="center">

# TON Marketplace — NFT Web Frontend

**Open-source reference front-end for an NFT marketplace on the TON blockchain.**
*Donated by Libermall as a starting point for builders.*

[![License: MIT](https://img.shields.io/badge/License-MIT-FFD60A.svg?style=flat-square)](LICENSE)
[![Live demo](https://img.shields.io/badge/Live%20demo-libermall.github.io-22C55E?style=flat-square)](https://libermall.github.io/TON-Marketplace-NFT-Web-Frontend/)
[![Network](https://img.shields.io/badge/Network-TON-0098EA?style=flat-square)](https://ton.org/)
[![Stars](https://img.shields.io/github/stars/LiberMall/TON-Marketplace-NFT-Web-Frontend?style=flat-square&label=★)](https://github.com/LiberMall/TON-Marketplace-NFT-Web-Frontend/stargazers)
[![Forks](https://img.shields.io/github/forks/LiberMall/TON-Marketplace-NFT-Web-Frontend?style=flat-square&label=⑂)](https://github.com/LiberMall/TON-Marketplace-NFT-Web-Frontend/network/members)
[![Built by Libermall](https://img.shields.io/badge/built%20by-Libermall-FFD60A?style=flat-square)](https://libermall.com)

[**Live demo**](https://libermall.github.io/TON-Marketplace-NFT-Web-Frontend/) · [**Figma design**](https://www.figma.com/@toncoin) · [**FunC contracts**](https://github.com/LiberMall/Contracts) · [**TNT CLI**](https://github.com/LiberMall/tnt) · [**Libermall**](https://libermall.com)

</div>

---

## What this is

The original front-end of the Libermall NFT marketplace, open-sourced as a reference design for the TON developer community. It's a small PHP + static-asset stack that renders every page (explore, collection, item, profile, auction, create) — no build pipeline, no JavaScript framework, no backend dependency. Drop it on any Apache/Nginx host with PHP and it serves immediately.

The same designs power [**libermall.com**](https://libermall.com) and provide the visual language for the broader Libermall ecosystem ([dex.libermall.com](https://dex.libermall.com), [pay.libermall.com](https://pay.libermall.com), [card.libermall.com](https://card.libermall.com)).

> This is a **reference design**. For production, fork it, replace the brand, and wire it to your own indexer / wallet integration. The hosted demo at [`libermall.github.io`](https://libermall.github.io/TON-Marketplace-NFT-Web-Frontend/) is static — no live data.

## Repository layout

```
TON-Marketplace-NFT-Web-Frontend/
├── README.md
├── LICENSE                          ← MIT
├── SECURITY.md
├── CHANGELOG.md
├── .github/workflows/static.yml     ← deploys to GitHub Pages on push to main
├── assets/                          ← images, fonts, vendor CSS / JS
├── _header.php                      ← shared header partial
├── _footer.php                      ← shared footer partial
├── _activity-list.php               ← reusable activity feed
├── _collection-list.php             ← reusable collection grid
├── _collection-filters.php          ← reusable filter sidebar
├── index.php                        ← marketplace home
├── explore.php                      ← discover view
├── collection.php                   ← collection detail
├── collection-item.php              ← individual NFT page
├── collection-item-put-for-sale.php ← listing flow
├── collection-item-put-for-auction.php ← auction flow
├── create-nft.php                   ← mint flow UI
├── profile.php                      ← public profile
├── my-profile.php                   ← own profile
├── edit-profile.php                 ← profile settings
└── 404.php                          ← branded 404
```

## Quickstart

### Run locally

```bash
git clone git@github.com:LiberMall/TON-Marketplace-NFT-Web-Frontend.git
cd TON-Marketplace-NFT-Web-Frontend
php -S localhost:8000
# → open http://localhost:8000
```

Requires PHP 7.4+. No dependencies.

### Deploy

The repository ships a GitHub Actions workflow that publishes the rendered output to **GitHub Pages** on every push to `main` — see [`.github/workflows/static.yml`](.github/workflows/static.yml). The live demo at [`libermall.github.io/TON-Marketplace-NFT-Web-Frontend/`](https://libermall.github.io/TON-Marketplace-NFT-Web-Frontend/) is produced by that workflow.

For your own deploy, point any standard PHP host (Apache + mod_php, nginx + php-fpm, Caddy, GCloud App Engine) at the repo root.

## Designs

Source files for every screen live on Figma: **[figma.com/@toncoin](https://www.figma.com/@toncoin)**.

If you fork this front-end, fork the Figma designs too — they include every reusable component, the type scale, the colour palette, and the empty / error / loading states.

## Wiring to a real marketplace

This front-end is intentionally decoupled. To make it functional you need:

1. **NFT indexer** — anything that exposes `getCollection`, `getCollectionItems`, `getItem`, `getActivity`. The Libermall production stack uses a private indexer; the open-source [`@ton/sandbox`](https://github.com/ton-org/sandbox) + [`tnt`](https://github.com/LiberMall/tnt) are good starting points.
2. **Wallet integration** — [TON Connect 2](https://docs.ton.org/develop/dapps/ton-connect/overview) is the right call for production. Add an inline TON Connect button in `_header.php`.
3. **Marketplace contract** — see the open-source [`LiberMall/Contracts`](https://github.com/LiberMall/Contracts) repo for the FunC source of the production sale / marketplace contracts.

## Roadmap

- [x] Static reference front-end with every key page
- [x] GitHub Actions auto-deploy to GitHub Pages
- [x] Figma design source published
- [ ] Inline TON Connect 2 integration example
- [ ] Reference indexer integration (sample data fetch)
- [ ] Optional Tact-rewrite of contracts to match a fresh front-end build

## Contributing

Issues and PRs welcome — especially around accessibility, mobile rendering, and TON Connect samples. See [`SECURITY.md`](SECURITY.md) before reporting security issues.

## License

[MIT](LICENSE) © 2026 Libermall. The `Libermall` wordmark and the M-shield logo are trademarks; see brand guidelines in [`LiberMall/libermall-id-landing`](https://github.com/LiberMall/libermall-id-landing/blob/main/BRANDBOOK.md).

## Contact

- General: [`hello@libermall.com`](mailto:hello@libermall.com)
- Security: [`security@libermall.com`](mailto:security@libermall.com)

---

<div align="center">

**Part of the [Libermall ecosystem](https://libermall.com).**

[Identity](https://id.libermall.com) · [DEX](https://dex.libermall.com) · [Pay](https://pay.libermall.com) · [Card](https://card.libermall.com) · [Reviews](https://sites.reviews) · [TonChat AI](https://tonchat.ai) · [TON.CEO](https://ton.ceo)

</div>
