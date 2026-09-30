# Survey Pacific static website

The `.html` files are static versions of the original PHP pages and can be hosted on GitHub Pages. Shared images, stylesheets, and JavaScript remain in `assets/`, `css/`, and `js/`.

## Publish with GitHub Pages

1. Push this repository to GitHub.
2. Open **Settings → Pages** for the repository.
3. Under **Build and deployment**, choose **Deploy from a branch**.
4. Select the branch containing the site and the `/ (root)` folder, then save.

GitHub Pages will publish `index.html` as the homepage. Internal links use `.html` pages.

The original PHP files are kept in `_php-source/` for reference. GitHub Pages/Jekyll ignores directories that start with an underscore, so these source files are not published. Forms currently have no submission backend; connect a form service or backend if you need to receive submissions.
