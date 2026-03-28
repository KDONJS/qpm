# AGENTS.md

This guide is for autonomous coding agents working in `qpm/`.
It captures the repo's real conventions and practical commands.

## 1) Project Snapshot

- Stack: PHP multi-page site with shared includes, vanilla JS, and CSS.
- Entry point/router: `index.php`.
- Global config: `config/config.php`.
- Reusable PHP helpers: `includes/functions.php`.
- Shared layout fragments: `includes/header.php`, `includes/footer.php`.
- Page implementations: `pages/*.php`.
- Frontend assets: `assets/css/*`, `assets/js/*`, `assets/img/*`.
- Main internal standards doc: `DEVELOPMENT.md`.

## 2) Environment and Run Commands

- PHP is required locally.
- No package manager or build pipeline is configured in this repository.
- No Composer file (`composer.json`) is present.
- No Node package file (`package.json`) is present.

### Run locally

- Start local server from repo root:
  - `php -S 127.0.0.1:8000 -t .`
- Open in browser:
  - `http://127.0.0.1:8000/`
- Route example:
  - `http://127.0.0.1:8000/?page=contactenos`

### "Build" command status

- There is currently no build step.
- Treat syntax checks + manual smoke tests as the effective validation pipeline.

## 3) Lint/Test Commands (Current Reality)

### PHP syntax lint

- Lint one PHP file:
  - `php -l pages/contactenos.php`
- Lint all tracked PHP files:
  - `git ls-files '*.php' | while read -r f; do php -l "$f" || exit 1; done`

### JS/CSS lint

- No JS/CSS lint tool is configured (no ESLint/Stylelint config found).
- Keep JS and CSS edits small and consistent with nearby files.

### Automated tests

- No automated test framework is configured (no PHPUnit/Pest config found).
- No `tests/` directory is present.

### "Single test" guidance in this repo

Because there is no test runner yet, use one of these as a focused single-check workflow:

- Syntax-check a single changed PHP file:
  - `php -l path/to/file.php`
- Manual single-page smoke test:
  - run server, then visit one route (for example `/?page=MPd`) and verify render/errors.
- Form flow check (contact form):
  - submit `/pages/procesar-contacto.php` through the site form and verify success/error states.

### If a test framework gets added later

- PHPUnit single file pattern: `vendor/bin/phpunit tests/SomeTest.php`
- PHPUnit single method pattern: `vendor/bin/phpunit --filter testMethodName tests/SomeTest.php`

## 4) Coding Style Guidelines

These rules reflect current code in `config/`, `includes/`, `pages/`, and `assets/`.

### 4.1 PHP style

- Start files with `<?php` and keep a top-level docblock summary.
- Use `require_once` for dependencies.
- Prefer explicit paths with `__DIR__` for includes.
- Use camelCase for variables and function names (`$currentPage`, `getPageInfo`).
- Use UPPER_SNAKE_CASE for constants (`BASE_URL`, `VALID_PAGES`).
- Use strict return types and parameter types when practical.
- Keep functions small and single-purpose.
- Use PHPDoc where it adds value, especially for array shapes.
- Prefer early returns for guard clauses.

### 4.2 Imports/includes conventions

- Load config/helpers near the top of each PHP file.
- Typical order:
  1. `require_once __DIR__ . '/../config/config.php';`
  2. `require_once __DIR__ . '/../includes/functions.php';`
- In root files, use root-relative `__DIR__` paths.
- Do not include files based on unsanitized user input.

### 4.3 Formatting and readability

- Match existing indentation (4 spaces in PHP/CSS/JS files).
- Use single quotes for plain strings unless interpolation is needed.
- Keep comments meaningful; avoid narrating obvious code.
- Preserve existing Spanish user-facing text unless task asks otherwise.

### 4.4 Types and data handling

- Continue using scalar type hints (`string`, `int`, `bool`, `array`).
- Use nullable types where applicable (`?array`, `?string`).
- For structured arrays, document expected shape in PHPDoc.

### 4.5 Naming conventions

- Files: kebab-case (`hero-service.php`, `contact-tabs.js`).
- PHP functions: camelCase (`renderServiceHero`).
- PHP variables: camelCase (`$metaDescription`).
- Constants: UPPER_SNAKE_CASE (`COMPANY_PHONE`).
- CSS classes: kebab-case (`mobile-menu-overlay`, `service-card-modern`).
- JS object/module names: PascalCase for singleton-like objects (`Carousel`, `TabController`).

### 4.6 Error handling and validation

- Validate and sanitize all request input (`$_GET`, `$_POST`) before use.
- Escape all HTML output with `e()` or `htmlspecialchars(..., ENT_QUOTES, 'UTF-8')`.
- Check file existence before include when path may vary.
- Fail safely with defaults (example: fallback to `'home'` page).
- Use redirects for invalid request methods where flow requires it.
- Never expose raw internal errors to end users in page output.

### 4.7 Security rules

- Keep routing constrained to `VALID_PAGES` from config.
- Prevent path traversal by sanitizing route/page values.
- Keep session hardening settings intact in `config/config.php`.
- Do not add secrets or credentials into tracked files.

### 4.8 CSS/JS conventions

- Reuse CSS variables from `assets/css/variables.css` when possible.
- Prefer mobile-first responsive rules.
- Keep page-specific styles scoped and minimal.
- In JS, keep current IIFE module style unless asked to refactor globally.
- Prefer unobtrusive event binding and graceful null checks (optional chaining).

## 5) Agent Workflow Expectations

- Before edits, read nearby files for established patterns.
- Make minimal, targeted changes; do not run broad rewrites.
- Preserve existing behavior unless explicitly changing it.
- After edits, run at least:
  - `php -l` on changed PHP files.
  - Manual smoke check on affected route(s).
- When adding a new page, update `VALID_PAGES` in `config/config.php`.

## 6) Cursor/Copilot Rules Check

- Checked for Cursor rules in `.cursor/rules/` and `.cursorrules`: none found.
- Checked for Copilot instructions in `.github/copilot-instructions.md`: not found.
- If any of these files are added later, treat them as higher-priority local agent instructions.

When uncertain, follow existing patterns in `includes/functions.php`, `config/config.php`, and recent page files.
