<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styling */
        body {
            background-color: #f5f9ff;
        }
        .sidebar {
            background-color: #2d3a5f;
            height: 100vh;
            padding-top: 20px;
            color: #ffffff;
        }
        .sidebar .nav-link {
            color: #cfd8e3;
        }
        .sidebar .nav-link.active {
            background-color: #4a5886;
            color: #ffffff;
        }
        .content-area {
            padding: 20px;
        }
        .card {
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container-fluid ">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 sidebar position-fixed">
                <h5 class="text-center mb-4">USIMPORTDATA</h5>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Import Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Export Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Search Live</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Team</a>
                    </li> --}}
                </ul>
                <div class="position-absolute bottom-0 start-0 w-100">
                    <a class="nav-link text-center" href="#">Settings</a>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-10 ms-sm-auto content-area">
                <!-- Top Navbar -->
                <div class="d-flex justify-content-between align-items-center mb-3 position-relative">
                    <h4>Making The World a Better Place</h4>
                    <div class="d-flex align-items-center">
                        <select class="form-select me-2" style="width: auto;">
                            <option selected>English</option>
                            {{-- <option value="1">Spanish</option> --}}
                        </select>
                        {{-- <button class="btn btn-outline-secondary me-2">Preview</button> --}}
                        <button class="btn btn-primary">Save</button>
                    </div>
                </div>

                <!-- Tabbed Content -->
                <div class="card p-3">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="meta-tab" data-bs-toggle="tab" data-bs-target="#meta" type="button" role="tab">Meta</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="content-tab" data-bs-toggle="tab" data-bs-target="#content" type="button" role="tab">Hero Content</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="quick-tab" data-bs-toggle="tab" data-bs-target="#quick" type="button" role="tab">Quick Search</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="key-tab" data-bs-toggle="tab" data-bs-target="#key" type="button" role="tab">Key Features</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="possiblities-tab" data-bs-toggle="tab" data-bs-target="#possiblities" type="button" role="tab">Possiblities</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Benefits-tab" data-bs-toggle="tab" data-bs-target="#Benefits " type="button" role="tab">Benefits </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="statistics-tab" data-bs-toggle="tab" data-bs-target="#statistics" type="button" role="tab">Statistics</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="clients-tab" data-bs-toggle="tab" data-bs-target="#clients" type="button" role="tab">Clients</button>
                        </li>
                    </ul>
                    <div class="tab-content mt-3" id="myTabContent">
                        <!-- Hero Content Tab -->
                        <div class="tab-pane fade " id="content" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-lable">Hero Heading</label>
                                <input type="text" class="form-control" placeholder="Hero Heading">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Text</label>
                                <textarea class="form-control" rows="4">Making The World a Better Place</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image Alt</label>
                                <input type="text" class="form-control" placeholder="Image Alt">
                            </div>
                            {{-- <button class="btn btn-outline-primary">Add block</button> --}}
                        </div>
                        <!-- Meta Tab -->
                        <div class="tab-pane fade show active" id="meta" role="tabpanel">
                            <div class="mb-3">
                                <label for="metaTitle" class="form-label">Meta Title</label>
                                <input type="text" id="metaTitle" class="form-control" placeholder="Enter meta title">
                            </div>
                            <div class="mb-3">
                                <label for="metaKeywords" class="form-label">Keywords</label>
                                <input type="text" id="metaKeywords" class="form-control" placeholder="Enter keywords, separated by commas">
                            </div>
                            <div class="mb-3">
                                <label for="metaTags" class="form-label">Tags</label>
                                <input type="text" id="metaTags" class="form-control" placeholder="Enter tags, separated by commas">
                            </div>
                            <div class="mb-3">
                                <label for="metaDescription" class="form-label">Description</label>
                                <textarea id="metaDescription" class="form-control" rows="4" placeholder="Enter meta description"></textarea>
                            </div>
                        </div>
                        <!-- Quick Search -->
                        <div class="tab-pane fade" id="quick" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label">Quick Search Heading</label>
                                <input type="text" class="form-control" placeholder="Heading...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quick Search Para</label>
                                <textarea class="form-control" rows="4">Quick Search Paragraph</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quick Search Image</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quick Search Image Alt</label>
                                <input type="text" class="form-control" placeholder="Image Alt">
                            </div>
                            {{-- Card One --}}
                            <div class="mb-3">
                                <label class="form-label">Quick Search Card Heading One</label>
                                <input type="text" class="form-control" placeholder="Heading...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quick Search Card Para One</label>
                                <textarea class="form-control" rows="4">Quick Search Paragraph</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quick Search Card Image One</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quick Search Card Image Alt One</label>
                                <input type="text" class="form-control" placeholder="Image Alt">
                            </div>
                            {{-- Card Two --}}
                            <div class="mb-3">
                                <label class="form-label">Quick Search Card Heading Two</label>
                                <input type="text" class="form-control" placeholder="Heading...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quick Search Card Para Two</label>
                                <textarea class="form-control" rows="4">Quick Search Paragraph</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quick Search Card Image Two</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quick Search Card Image Alt Two</label>
                                <input type="text" class="form-control" placeholder="Image Alt">
                            </div>
                            {{-- Card Three --}}
                            <div class="mb-3">
                                <label class="form-label">Quick Search Card Heading Three</label>
                                <input type="text" class="form-control" placeholder="Heading...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quick Search Card Para Three</label>
                                <textarea class="form-control" rows="4">Quick Search Paragraph</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quick Search Card Image Three</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quick Search Card Image Alt Three</label>
                                <input type="text" class="form-control" placeholder="Image Alt">
                            </div>
                            {{-- Card Four --}}
                            <div class="mb-3">
                                <label class="form-label">Quick Search Card Heading Four</label>
                                <input type="text" class="form-control" placeholder="Heading...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quick Search Card Para Four</label>
                                <textarea class="form-control" rows="4">Quick Search Paragraph</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quick Search Card Image Four</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quick Search Card Image Alt Four</label>
                                <input type="text" class="form-control" placeholder="Image Alt">
                            </div>
                        </div>
                        {{-- Key Features --}}
                        <div class="tab-pane fade" id="key" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label">Key Features Heading</label>
                                <input type="text" class="form-control" placeholder="Heading..." name="KeyFeaturesHeading">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Key Features Image</label>
                                <input type="file" class="form-control" name="KeyFeaturesImage">
                            </div>
                            {{-- Key One --}}
                            <div class="mb-3">
                                <label class="form-label">Key Heading One</label>
                                <input type="text" class="form-control" placeholder="Heading..." name="KeyHeadingOne">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Key Para One</label>
                                <textarea class="form-control" rows="4" name="KeyParaOne">Quick Search Paragraph</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Key Image One</label>
                                <input type="file" class="form-control" name="KeyImageOne">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Key Image Alt One</label>
                                <input type="text" class="form-control" placeholder="Image Alt" name="KeyImageAltOne">
                            </div>
                            {{-- Key Two --}}
                            <div class="mb-3">
                                <label class="form-label">Key Heading Two</label>
                                <input type="text" class="form-control" placeholder="Heading..." name="KeyHeadingTwo">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Key Para Two</label>
                                <textarea class="form-control" rows="4" name="KeyParaTwo">Quick Search Paragraph</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Key Image Two</label>
                                <input type="file" class="form-control" name="KeyImageTwo">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Key Image Alt Two</label>
                                <input type="text" class="form-control" placeholder="Image Alt" name="KeyImageAltTwo">
                            </div>
                            {{-- Key Three --}}
                            <div class="mb-3">
                                <label class="form-label">Key Heading Three</label>
                                <input type="text" class="form-control" placeholder="Heading..." name="KeyHeadingThree">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Key Para Three</label>
                                <textarea class="form-control" rows="4" name="KeyParaThree">Quick Search Paragraph</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Key Image Three</label>
                                <input type="file" class="form-control" name="KeyImageThree">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Key Image Alt Three</label>
                                <input type="text" class="form-control" placeholder="Image Alt" name="KeyImageAltThree">
                            </div>
                            {{-- Key Four --}}
                            <div class="mb-3">
                                <label class="form-label">Key Heading Four</label>
                                <input type="text" class="form-control" placeholder="Heading..." name="KeyHeadingFour">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Key Para Four</label>
                                <textarea class="form-control" rows="4" name="KeyParaFour">Quick Search Paragraph</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Key Image Four</label>
                                <input type="file" class="form-control" name="KeyImageFour">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Key Image Alt Four</label>
                                <input type="text" class="form-control" placeholder="Image Alt" name="KeyImageAltFour">
                            </div>
                        </div>
                        <!-- Possibilities -->
                        <div class="tab-pane fade" id="possiblities" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label">Possibilities Heading</label>
                                <input type="text" class="form-control" placeholder="Heading...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Possibilities Para</label>
                                <textarea class="form-control" rows="4">Possibilities Paragraph</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Possibilities Image</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Possibilities Image Alt</label>
                                <input type="text" class="form-control" placeholder="Image Alt">
                            </div>
                            {{-- Card One --}}
                            <div class="mb-3">
                                <label class="form-label">Possibilities Card Heading One</label>
                                <input type="text" class="form-control" placeholder="Heading...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Possibilities Card Para One</label>
                                <textarea class="form-control" rows="4">Possibilities Paragraph</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Possibilities Card Image One</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Possibilities Card Image Alt One</label>
                                <input type="text" class="form-control" placeholder="Image Alt">
                            </div>
                            {{-- Card Two --}}
                            <div class="mb-3">
                                <label class="form-label">Possibilities Card Heading Two</label>
                                <input type="text" class="form-control" placeholder="Heading...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Possibilities Card Para Two</label>
                                <textarea class="form-control" rows="4">Possibilities Paragraph</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Possibilities Card Image Two</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Possibilities Card Image Alt Two</label>
                                <input type="text" class="form-control" placeholder="Image Alt">
                            </div>
                            {{-- Card Three --}}
                            <div class="mb-3">
                                <label class="form-label">Possibilities Card Heading Three</label>
                                <input type="text" class="form-control" placeholder="Heading...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Possibilities Card Para Three</label>
                                <textarea class="form-control" rows="4">Possibilities Paragraph</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Possibilities Card Image Three</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Possibilities Card Image Alt Three</label>
                                <input type="text" class="form-control" placeholder="Image Alt">
                            </div>
                            {{-- Card Four --}}
                            <div class="mb-3">
                                <label class="form-label">Possibilities Card Heading Four</label>
                                <input type="text" class="form-control" placeholder="Heading...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Possibilities Card Para Four</label>
                                <textarea class="form-control" rows="4">Possibilities Paragraph</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Possibilities Card Image Four</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Possibilities Card Image Alt Four</label>
                                <input type="text" class="form-control" placeholder="Image Alt">
                            </div>
                        </div>
                        {{-- Benefits --}}
                        <div class="tab-pane fade" id="Benefits" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label">Benefits Image</label>
                                <input type="file" class="form-control" name="BenefitsImage">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Benefits  Heading</label>
                                <input type="text" class="form-control" placeholder="Benefits Heading.." name="BenefitsHeading">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Benefits  Para</label>
                                <textarea class="form-control" rows="4" name="BenefitsPara">Benefits Paragraph</textarea>
                            </div>
                        </div>
                        <!-- Statistics -->
                        <div class="tab-pane fade" id="statistics" role="tabpanel" >
                            <div class="mb-3">
                                <label class="form-label">Statistics Image</label>
                                <input type="file" class="form-control" name="Statistics Image">
                            </div>
                            <div class="mb-3">
                                <label class="form-control">Statistics Heading</label>
                                <input type="text" class="form-control" placeholder="Statistics Heading.." name="Statistics">
                            </div>
                            {{-- Card One --}}
                            <div class="mb-3">
                                <label class="form-label">Statistics Heading One</label>
                                <input type="text" class="form-control" placeholder="Heading...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Statistics Para One</label>
                                <textarea class="form-control" rows="4">Statistics Paragraph</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Statistics Image One</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Statistics Image Alt One</label>
                                <input type="text" class="form-control" placeholder="Image Alt">
                            </div>
                            {{-- Card Two --}}
                            <div class="mb-3">
                                <label class="form-label">Statistics Heading Two</label>
                                <input type="text" class="form-control" placeholder="Heading...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Statistics Para Two</label>
                                <textarea class="form-control" rows="4">Statistics Paragraph</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Statistics Image Two</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Statistics Image Alt Two</label>
                                <input type="text" class="form-control" placeholder="Image Alt">
                            </div>
                            {{-- Card Three --}}
                            <div class="mb-3">
                                <label class="form-label">Statistics Heading Three</label>
                                <input type="text" class="form-control" placeholder="Heading...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Statistics Para Three</label>
                                <textarea class="form-control" rows="4">Statistics Paragraph</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Statistics Image Three</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Statistics Image Alt Three</label>
                                <input type="text" class="form-control" placeholder="Image Alt">
                            </div>
                            {{-- Card Four --}}
                            <div class="mb-3">
                                <label class="form-label">Statistics Heading Four</label>
                                <input type="text" class="form-control" placeholder="Heading...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Statistics Para Four</label>
                                <textarea class="form-control" rows="4">Statistics Paragraph</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Statistics Image Four</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Statistics Image Alt Four</label>
                                <input type="text" class="form-control" placeholder="Image Alt">
                            </div>
                        </div>
                        {{-- Clients --}}
                        <div class="tab-pane fade" id="clients" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label">Clients Heading</label>
                                <input type="text" class="form-control" placeholder="Heading...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Clients Para</label>
                                <textarea class="form-control" rows="4">Clients Paragraph</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar (Author, Post Date, etc.) -->
                {{-- <div class="card mt-4 p-3">
                    <h5>Author</h5>
                    <div class="mb-3">
                        <select class="form-select">
                            <option selected>David Clarke</option>
                            <option value="1">Jane Doe</option>
                        </select>
                    </div>
                    <h5>Post Date</h5>
                    <input type="datetime-local" class="form-control mb-3">
                    <h5>Category</h5>
                    <input type="text" class="form-control mb-3" placeholder="Big Data">
                    <h5>Tag</h5>
                    <input type="text" class="form-control mb-3" placeholder="Big Data">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" checked>
                        <label class="form-check-label">Published globally</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" checked>
                        <label class="form-check-label">Published in English</label>
                    </div>
                </div> --}}
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
