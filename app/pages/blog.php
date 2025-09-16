<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <title>Blog Template · Bootstrap v5.3</title>
    <link href="<?= ROOT ?>/public/assets/css/home.css" rel="stylesheet">
    <link href="<?= ROOT ?>/public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= ROOT ?>/public/assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= ROOT ?>/public/assets/css/headers.css" rel="stylesheet">
    <link href="<?= ROOT ?>/public/assets/slider/ism/css/my-slider.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet" />
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: #0000001a;
            border: solid rgba(0, 0, 0, 0.15);
            border-width: 1px 0;
            box-shadow:
                inset 0 0.5em 1.5em #0000001a,
                inset 0 0.125em 0.5em #00000026;
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -0.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .bi {
            width: 1em;
            height: 1em;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>
</head>

<body>
    <main class="container">
        <div class="row py-4 g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">Feito por [NOME DO AUTOR]</h3>
                <article class="blog-post">
                    <h2 class="display-5 mb-1">Blog title here</h2>
                    <p class="blog-post-meta">
                        January 1, 2021 by <a href="#">Mark</a>
                    </p>
                    <p>
                        This blog post shows a few different types of content that’s
                        supported and styled with Bootstrap. Basic typography, lists,
                        tables, images, code, and more are all supported as expected.
                    </p>
                    <hr />
                    <p>
                        This is some additional paragraph placeholder content. It has been
                        written to fill the available space and show how a longer snippet
                        of text affects the surrounding content. We'll repeat it often to
                        keep the demonstration flowing, so be on the lookout for this
                        exact same string of text.
                    </p>
                    <h2>Blockquotes</h2>
                    <p>This is an example blockquote in action:</p>
                    <blockquote class="blockquote">
                        <p>Quoted text goes here.</p>
                    </blockquote>
                    <p>
                        This is some additional paragraph placeholder content. It has been
                        written to fill the available space and show how a longer snippet
                        of text affects the surrounding content. We'll repeat it often to
                        keep the demonstration flowing, so be on the lookout for this
                        exact same string of text.
                    </p>
                    <h3>Example lists</h3>
                    <p>
                        This is some additional paragraph placeholder content. It's a
                        slightly shorter version of the other highly repetitive body text
                        used throughout. This is an example unordered list:
                    </p>
                    <ul>
                        <li>First list item</li>
                        <li>Second list item with a longer description</li>
                        <li>Third list item to close it out</li>
                    </ul>
                    <p>And this is an ordered list:</p>
                    <ol>
                        <li>First list item</li>
                        <li>Second list item with a longer description</li>
                        <li>Third list item to close it out</li>
                    </ol>
                    <p>And this is a definition list:</p>
                    <dl>
                        <dt>HyperText Markup Language (HTML)</dt>
                        <dd>
                            The language used to describe and define the content of a Web
                            page
                        </dd>
                        <dt>Cascading Style Sheets (CSS)</dt>
                        <dd>Used to describe the appearance of Web content</dd>
                        <dt>JavaScript (JS)</dt>
                        <dd>
                            The programming language used to build advanced Web sites and
                            applications
                        </dd>
                    </dl>
                    <h2>Inline HTML elements</h2>
                    <p>
                        HTML defines a long list of available inline tags, a complete list
                        of which can be found on the
                        <a
                            href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Mozilla Developer Network</a>.
                    </p>
                    <ul>
                        <li>
                            <strong>To bold text</strong>, use
                            <code class="language-plaintext highlighter-rouge">&lt;strong&gt;</code>.
                        </li>
                        <li>
                            <em>To italicize text</em>, use
                            <code class="language-plaintext highlighter-rouge">&lt;em&gt;</code>.
                        </li>
                        <li>
                            Abbreviations, like
                            <abbr title="HyperText Markup Language">HTML</abbr> should use
                            <code class="language-plaintext highlighter-rouge">&lt;abbr&gt;</code>, with an optional
                            <code class="language-plaintext highlighter-rouge">title</code>
                            attribute for the full phrase.
                        </li>
                        <li>
                            Citations, like <cite>— Mark Otto</cite>, should use
                            <code class="language-plaintext highlighter-rouge">&lt;cite&gt;</code>.
                        </li>
                        <li>
                            <del>Deleted</del> text should use
                            <code class="language-plaintext highlighter-rouge">&lt;del&gt;</code>
                            and <ins>inserted</ins> text should use
                            <code class="language-plaintext highlighter-rouge">&lt;ins&gt;</code>.
                        </li>
                        <li>
                            Superscript <sup>text</sup> uses
                            <code class="language-plaintext highlighter-rouge">&lt;sup&gt;</code>
                            and subscript <sub>text</sub> uses
                            <code class="language-plaintext highlighter-rouge">&lt;sub&gt;</code>.
                        </li>
                    </ul>
                    <p>
                        Most of these elements are styled by browsers with few
                        modifications on our part.
                    </p>
                    <h2>Heading</h2>
                    <p>
                        This is some additional paragraph placeholder content. It has been
                        written to fill the available space and show how a longer snippet
                        of text affects the surrounding content. We'll repeat it often to
                        keep the demonstration flowing, so be on the lookout for this
                        exact same string of text.
                    </p>
                    <h3>Sub-heading</h3>
                    <p>
                        This is some additional paragraph placeholder content. It has been
                        written to fill the available space and show how a longer snippet
                        of text affects the surrounding content. We'll repeat it often to
                        keep the demonstration flowing, so be on the lookout for this
                        exact same string of text.
                    </p>
                    <pre><code>Example code block</code></pre>
                    <p>
                        This is some additional paragraph placeholder content. It's a
                        slightly shorter version of the other highly repetitive body text
                        used throughout.
                    </p>
                </article>
                <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1">Another blog post</h2>
                    <p class="blog-post-meta">
                        December 23, 2020 by <a href="#">Jacob</a>
                    </p>
                    <p>
                        This is some additional paragraph placeholder content. It has been
                        written to fill the available space and show how a longer snippet
                        of text affects the surrounding content. We'll repeat it often to
                        keep the demonstration flowing, so be on the lookout for this
                        exact same string of text.
                    </p>
                    <blockquote>
                        <p>
                            Longer quote goes here, maybe with some
                            <strong>emphasized text</strong> in the middle of it.
                        </p>
                    </blockquote>
                    <p>
                        This is some additional paragraph placeholder content. It has been
                        written to fill the available space and show how a longer snippet
                        of text affects the surrounding content. We'll repeat it often to
                        keep the demonstration flowing, so be on the lookout for this
                        exact same string of text.
                    </p>
                    <h3>Example table</h3>
                    <p>And don't forget about tables in these posts:</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Upvotes</th>
                                <th>Downvotes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Alice</td>
                                <td>10</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <td>Bob</td>
                                <td>4</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Charlie</td>
                                <td>7</td>
                                <td>9</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Totals</td>
                                <td>21</td>
                                <td>23</td>
                            </tr>
                        </tfoot>
                    </table>
                    <p>
                        This is some additional paragraph placeholder content. It's a
                        slightly shorter version of the other highly repetitive body text
                        used throughout.
                    </p>
                </article>
                <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1">New feature</h2>
                    <p class="blog-post-meta">
                        December 14, 2020 by <a href="#">Chris</a>
                    </p>
                    <p>
                        This is some additional paragraph placeholder content. It has been
                        written to fill the available space and show how a longer snippet
                        of text affects the surrounding content. We'll repeat it often to
                        keep the demonstration flowing, so be on the lookout for this
                        exact same string of text.
                    </p>
                    <ul>
                        <li>First list item</li>
                        <li>Second list item with a longer description</li>
                        <li>Third list item to close it out</li>
                    </ul>
                    <p>
                        This is some additional paragraph placeholder content. It's a
                        slightly shorter version of the other highly repetitive body text
                        used throughout.
                    </p>
                </article>
                <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
                    <a
                        class="btn btn-outline-secondary rounded-pill disabled"
                        aria-disabled="true">Newer</a>
                </nav>
            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem">
                    <div>
                        <h4 class="fst-italic">Recent posts</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a
                                    class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                    href="#">
                                    <img src="<?= ROOT ?>/public/assets/images/demonslayer-slide-2.jpg"
                                        class="card-img-bottom" alt="Design image" style="height:80px; width:150px; object-fit:cover;" />
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">Example blog post title</h6>
                                        <small class="text-body-secondary">January 15, 2024</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a
                                    class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                    href="#">
                                    <img src="<?= ROOT ?>/public/assets/images/demonslayer-slide-3.webp"
                                        class="card-img-bottom" alt="Design image" style="height:80px; width:150px; object-fit:cover;" />
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">This is another blog post title</h6>
                                        <small class="text-body-secondary">January 14, 2024</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a
                                    class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                    href="#">
                                    <img src="<?= ROOT ?>/public/assets/images/demonslayer-slide-1.jpg"
                                        class="card-img-bottom" alt="Design image" style="height:80px; width:150px; object-fit:cover;" />
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">
                                            Longer blog post title: This one has multiple lines!onger blog post title: This one has multiple lines!onger blog post title: This one has multiple lines!onger blog post title: This one has multiple lines!
                                        </h6>
                                        <small class="text-body-secondary">January 13, 2024</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
  <script src="<?=ROOT?>/public/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>