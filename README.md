# mod_downloadaccordionghsvs.

Joomla site module. Display accordion with head image, headline, text, download links (with image preview).

- **Do not expect anything! It is designed for one indiviual Joomla 3 site with outdated BS3. Not for the world!!**

# My personal build procedure (WSL 1, Debian, Win 10)

- Prepare/adapt `./package.json`.
- `cd /mnt/z/git-kram/mod_downloadaccordionghsvs`

## node/npm updates/installation
- `npm run updateCheck` or (faster) `npm outdated`
- `npm run update` (if needed) or (faster) `npm update --save-dev`
- `npm install` (if needed)

## Build installable ZIP package
- `node build.js`
- New, installable ZIP is in `./dist` afterwards.
- All packed files for this ZIP can be seen in `./package`. **But only if you disable deletion of this folder at the end of `build.js`**.s

### For Joomla update and changelog server
- Create new release with new tag.
- - See release description in `dist/release.txt`.
- Extracts(!) of the update and changelog XML for update and changelog servers are in `./dist` as well. Copy/paste and necessary additions.
