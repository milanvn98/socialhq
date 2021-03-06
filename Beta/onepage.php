<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link href="./style.css" rel="stylesheet" type="text/css">
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="./script.js"></script> 
</head>
<body>
    <div class="loader"></div>
    <div class="smartpage-container container">
        <div class="page-header">
            <span class="settings-button service-button">Settings</span>
            <div class="avatar empty">
                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="camera" class="svg-inline--fa fa-w-16 fa-camera" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M324.3 64c3.3 0 6.3 2.1 7.5 5.2l22.1 58.8H464c8.8 0 16 7.2 16 16v288c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16h110.2l20.1-53.6c2.3-6.2 8.3-10.4 15-10.4h131m0-32h-131c-20 0-37.9 12.4-44.9 31.1L136 96H48c-26.5 0-48 21.5-48 48v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V144c0-26.5-21.5-48-48-48h-88l-14.3-38c-5.8-15.7-20.7-26-37.4-26zM256 408c-66.2 0-120-53.8-120-120s53.8-120 120-120 120 53.8 120 120-53.8 120-120 120zm0-208c-48.5 0-88 39.5-88 88s39.5 88 88 88 88-39.5 88-88-39.5-88-88-88z">
                    </path>
                </svg>
                <div class="delete-button service-button">
                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="trash-alt" class="svg-inline--fa fa-trash-alt fa-w-14 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M336 64l-33.6-44.8C293.3 7.1 279.1 0 264 0h-80c-15.1 0-29.3 7.1-38.4 19.2L112 64H24C10.7 64 0 74.7 0 88v2c0 3.3 2.7 6 6 6h26v368c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V96h26c3.3 0 6-2.7 6-6v-2c0-13.3-10.7-24-24-24h-88zM184 32h80c5 0 9.8 2.4 12.8 6.4L296 64H152l19.2-25.6c3-4 7.8-6.4 12.8-6.4zm200 432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V96h320v368zm-176-44V156c0-6.6 5.4-12 12-12h8c6.6 0 12 5.4 12 12v264c0 6.6-5.4 12-12 12h-8c-6.6 0-12-5.4-12-12zm-80 0V156c0-6.6 5.4-12 12-12h8c6.6 0 12 5.4 12 12v264c0 6.6-5.4 12-12 12h-8c-6.6 0-12-5.4-12-12zm160 0V156c0-6.6 5.4-12 12-12h8c6.6 0 12 5.4 12 12v264c0 6.6-5.4 12-12 12h-8c-6.6 0-12-5.4-12-12z"></path>
                    </svg>
                </div>
            </div>
            <input type="file" class="face-file-input" id="file_input" name="file_input" />
            <div class="bio-title bio-f-name" data-id="bio-f-name">
                <h1 class="empty">
                    <span>First Name</span>
                </h1>
            </div>
            <div class="bio-title bio-l-name" data-id="bio-l-name">
                <h1 class="empty">
                    <span>Last Name</span>
                </h1>
            </div>
            <div class="bio-title bio-email" data-id="bio-email">
                <h1 class="empty">
                    <span>Email here</span>
                </h1>
            </div>
            <div class="bio-title bio-phone" data-id="bio-phone">
                <h1 class="empty">
                    <span>Phone here</span>
                </h1>
            </div>
            <input type="hidden" id="first_name" name="first_name" value="" />
            <input type="hidden" id="last_name" name="last_name" value="" />
            <input type="hidden" id="email" name="email" value="" />
            <input type="hidden" id="phone" name="phone" value="" />
        </div>
        <div class="add-block-button add-social-links">
            <span>
                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="plus" class="svg-inline--fa fa-plus fa-w-12 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path fill="currentColor" d="M376 232H216V72c0-4.42-3.58-8-8-8h-32c-4.42 0-8 3.58-8 8v160H8c-4.42 0-8 3.58-8 8v32c0 4.42 3.58 8 8 8h160v160c0 4.42 3.58 8 8 8h32c4.42 0 8-3.58 8-8V280h160c4.42 0 8-3.58 8-8v-32c0-4.42-3.58-8-8-8z"></path>
                </svg> 
                Add Social
            </span>
        </div>
        <div class="link-btns">
            <!-- social links -->
        </div>
        <div class="submit-content">
            <input type="submit" class="btn form-control submit-btn" value="Submit" />
        </div>
        <div class="action-sheet slidein-enter-done title-sheet">
            <div class="table-align">
                <div class="table-cell-bottom">
                    <div class="action-sheet-body">
                        <div class="action-sheet-header">
                            <span class="clickable-icon right success" title="Done">
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="check" class="svg-inline--fa fa-check fa-w-16 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M435.848 83.466L172.804 346.51l-96.652-96.652c-4.686-4.686-12.284-4.686-16.971 0l-28.284 28.284c-4.686 4.686-4.686 12.284 0 16.971l133.421 133.421c4.686 4.686 12.284 4.686 16.971 0l299.813-299.813c4.686-4.686 4.686-12.284 0-16.971l-28.284-28.284c-4.686-4.686-12.284-4.686-16.97 0z"></path>
                                </svg>
                            </span>
                            <div class="action-sheet-title">Title</div>
                        </div>
                        <div class="form-group">
                            <input name="bio_title_input" id="bio_title_input" placeholder="Title" type="text" class="form-control m-form-control" value="" autofocus="autofocus">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="action-sheet slidein-enter-done link-sheet">
            <div class="table-align">
                <div class="table-cell-bottom">
                    <div class="action-sheet-body">
                        <div class="action-sheet-header">
                            <span class="clickable-icon right success social-link-save" title="Done">
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="check" class="svg-inline--fa fa-check fa-w-16 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M435.848 83.466L172.804 346.51l-96.652-96.652c-4.686-4.686-12.284-4.686-16.971 0l-28.284 28.284c-4.686 4.686-4.686 12.284 0 16.971l133.421 133.421c4.686 4.686 12.284 4.686 16.971 0l299.813-299.813c4.686-4.686 4.686-12.284 0-16.971l-28.284-28.284c-4.686-4.686-12.284-4.686-16.97 0z"></path>
                                </svg>
                            </span>
                            <div class="action-sheet-title">
                                Add Social
                            </div>
                        </div>
                        <div class="with-stack form-group">
                            <div class="side-controls drag-handle" tabindex="0" data-react-beautiful-dnd-drag-handle="6" aria-roledescription="Draggable item. Press space bar to lift" draggable="false">
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                </svg>
                            </div>
                            <div class="input-stack">
                                <div class="input-group input-stack-row">
                                    <div class="input-group-prepend">
                                        <button class="btn-outline-border btn btn-secondary">
                                            <svg aria-labelledby="svg-inline--fa-title-K2mwYrKBAezI" data-prefix="fab" data-icon="facebook" class="svg-inline--fa fa-facebook fa-w-16 fa-network" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><title id="svg-inline--fa-title-K2mwYrKBAezI">facebook</title><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg>
                                        </button>
                                    </div>
                                    <input name="facebook_link" id="facebook_link" placeholder="Facebook username" type="text" class="form-control social-link-item" value="">
                                </div>
                            </div>
                        </div>
                        <div class="with-stack form-group">
                            <div class="side-controls drag-handle" tabindex="0" data-react-beautiful-dnd-drag-handle="6" aria-roledescription="Draggable item. Press space bar to lift" draggable="false">
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                </svg>
                            </div>
                            <div class="input-stack">
                                <div class="input-group input-stack-row">
                                    <div class="input-group-prepend">
                                        <button class="btn-outline-border btn btn-secondary">
                                            <svg aria-labelledby="svg-inline--fa-title-WNbeot2rFxjI" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14 fa-network" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><title id="svg-inline--fa-title-WNbeot2rFxjI">instagram</title><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
                                        </button>
                                    </div>
                                    <input name="instagram_link" id="instagram_link" placeholder="Instagram username" type="text" class="form-control social-link-item" value="">
                                </div>
                            </div>
                        </div>
                        <div class="with-stack form-group">
                            <div class="side-controls drag-handle" tabindex="0" data-react-beautiful-dnd-drag-handle="6" aria-roledescription="Draggable item. Press space bar to lift" draggable="false">
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                </svg>
                            </div>
                            <div class="input-stack">
                                <div class="input-group input-stack-row">
                                    <div class="input-group-prepend">
                                        <button class="btn-outline-border btn btn-secondary">
                                            <svg aria-labelledby="svg-inline--fa-title-c55WlJDhXgA6" data-prefix="fab" data-icon="twitter" class="svg-inline--fa fa-twitter fa-w-16 fa-network" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><title id="svg-inline--fa-title-c55WlJDhXgA6">twitter</title><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
                                        </button>
                                    </div>
                                    <input name="twitter_link" id="twitter_link" placeholder="Twitter username" type="text" class="form-control social-link-item" value="">
                                </div>
                            </div>
                        </div>
                        <div class="with-stack form-group">
                            <div class="side-controls drag-handle" tabindex="0" data-react-beautiful-dnd-drag-handle="6" aria-roledescription="Draggable item. Press space bar to lift" draggable="false">
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                </svg>
                            </div>
                            <div class="input-stack">
                                <div class="input-group input-stack-row">
                                    <div class="input-group-prepend">
                                        <button class="btn-outline-border btn btn-secondary">
                                            <svg aria-labelledby="svg-inline--fa-title-8qY84bYNGCXq" data-prefix="fab" data-icon="youtube" class="svg-inline--fa fa-youtube fa-w-18 fa-network" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><title id="svg-inline--fa-title-8qY84bYNGCXq">youtube</title><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
                                        </button>
                                    </div>
                                    <input name="youtube_link" id="youtube_link" placeholder="Youtube channel url" type="text" class="form-control social-link-item" value="">
                                </div>
                            </div>
                        </div>
                        <div class="with-stack form-group">
                            <div class="side-controls drag-handle" tabindex="0" data-react-beautiful-dnd-drag-handle="6" aria-roledescription="Draggable item. Press space bar to lift" draggable="false">
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                </svg>
                            </div>
                            <div class="input-stack">
                                <div class="input-group input-stack-row">
                                    <div class="input-group-prepend">
                                        <button class="btn-outline-border btn btn-secondary">
                                            <svg aria-labelledby="svg-inline--fa-title-xidOXEisZmrQ" data-prefix="fab" data-icon="tiktok" class="svg-inline--fa fa-tiktok fa-w-14 fa-network" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><title id="svg-inline--fa-title-xidOXEisZmrQ">tiktok</title><path fill="currentColor" d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"></path></svg>
                                        </button>
                                    </div>
                                    <input name="tiktok_link" id="tiktok_link" placeholder="TikTok username" type="text" class="form-control social-link-item" value="">
                                </div>
                            </div>
                        </div>
                        <div class="with-stack form-group">
                            <div class="side-controls drag-handle" tabindex="0" data-react-beautiful-dnd-drag-handle="6" aria-roledescription="Draggable item. Press space bar to lift" draggable="false">
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                </svg>
                            </div>
                            <div class="input-stack">
                                <div class="input-group input-stack-row">
                                    <div class="input-group-prepend">
                                        <button class="btn-outline-border btn btn-secondary">
                                            <svg aria-labelledby="svg-inline--fa-title-3aW3F2r1Md2X" data-prefix="fab" data-icon="pinterest-p" class="svg-inline--fa fa-pinterest-p fa-w-12 fa-network" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><title id="svg-inline--fa-title-3aW3F2r1Md2X">pinterest</title><path fill="currentColor" d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"></path></svg>
                                        </button>
                                    </div>
                                    <input name="pinterest_link" id="pinterest_link" placeholder="Pinterest username" type="text" class="form-control social-link-item" value="">
                                </div>
                            </div>
                        </div>
                        <div class="with-stack form-group">
                            <div class="side-controls drag-handle" tabindex="0" data-react-beautiful-dnd-drag-handle="6" aria-roledescription="Draggable item. Press space bar to lift" draggable="false">
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                </svg>
                            </div>
                            <div class="input-stack">
                                <div class="input-group input-stack-row">
                                    <div class="input-group-prepend">
                                        <button class="btn-outline-border btn btn-secondary">
                                            <svg aria-labelledby="svg-inline--fa-title-OwHyX1XRoA5a" data-prefix="fab" data-icon="patreon" class="svg-inline--fa fa-patreon fa-w-16 fa-network" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><title id="svg-inline--fa-title-OwHyX1XRoA5a">patreon</title><path fill="currentColor" d="M512 194.8c0 101.3-82.4 183.8-183.8 183.8-101.7 0-184.4-82.4-184.4-183.8 0-101.6 82.7-184.3 184.4-184.3C429.6 10.5 512 93.2 512 194.8zM0 501.5h90v-491H0v491z"></path></svg>
                                        </button>
                                    </div>
                                    <input name="patreon_link" id="patreon_link" placeholder="Patreon username" type="text" class="form-control social-link-item" value="">
                                </div>
                            </div>
                        </div>
                        <div class="with-stack form-group">
                            <div class="side-controls drag-handle" tabindex="0" data-react-beautiful-dnd-drag-handle="6" aria-roledescription="Draggable item. Press space bar to lift" draggable="false">
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                </svg>
                            </div>
                            <div class="input-stack">
                                <div class="input-group input-stack-row">
                                    <div class="input-group-prepend">
                                        <button class="btn-outline-border btn btn-secondary">
                                            <svg aria-labelledby="svg-inline--fa-title-R8PiHlrnsXil" data-prefix="fab" data-icon="tumblr" class="svg-inline--fa fa-tumblr fa-w-10 fa-network" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><title id="svg-inline--fa-title-R8PiHlrnsXil">tumblr</title><path fill="currentColor" d="M309.8 480.3c-13.6 14.5-50 31.7-97.4 31.7-120.8 0-147-88.8-147-140.6v-144H17.9c-5.5 0-10-4.5-10-10v-68c0-7.2 4.5-13.6 11.3-16 62-21.8 81.5-76 84.3-117.1.8-11 6.5-16.3 16.1-16.3h70.9c5.5 0 10 4.5 10 10v115.2h83c5.5 0 10 4.4 10 9.9v81.7c0 5.5-4.5 10-10 10h-83.4V360c0 34.2 23.7 53.6 68 35.8 4.8-1.9 9-3.2 12.7-2.2 3.5.9 5.8 3.4 7.4 7.9l22 64.3c1.8 5 3.3 10.6-.4 14.5z"></path></svg>
                                        </button>
                                    </div>
                                    <input name="tumblr_link" id="tumblr_link" placeholder="Tumblr username" type="text" class="form-control social-link-item" value="">
                                </div>
                            </div>
                        </div>
                        <div class="with-stack form-group">
                            <div class="side-controls drag-handle" tabindex="0" data-react-beautiful-dnd-drag-handle="6" aria-roledescription="Draggable item. Press space bar to lift" draggable="false">
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                </svg>
                            </div>
                            <div class="input-stack">
                                <div class="input-group input-stack-row">
                                    <div class="input-group-prepend">
                                        <button class="btn-outline-border btn btn-secondary">
                                            <svg aria-labelledby="svg-inline--fa-title-3htsuBaMCans" data-prefix="fab" data-icon="vk" class="svg-inline--fa fa-vk fa-w-18 fa-network" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><title id="svg-inline--fa-title-3htsuBaMCans">vk</title><path fill="currentColor" d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z"></path></svg>
                                        </button>
                                    </div>
                                    <input name="vk_link" id="vk_link" placeholder="VK username or page id" type="text" class="form-control social-link-item" value="">
                                </div>
                            </div>
                        </div>
                        <div class="with-stack form-group">
                            <div class="side-controls drag-handle" tabindex="0" data-react-beautiful-dnd-drag-handle="6" aria-roledescription="Draggable item. Press space bar to lift" draggable="false">
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                </svg>
                            </div>
                            <div class="input-stack">
                                <div class="input-group input-stack-row">
                                    <div class="input-group-prepend">
                                        <button class="btn-outline-border btn btn-secondary">
                                            <svg aria-labelledby="svg-inline--fa-title-sl7rAIIIvUzo" data-prefix="fab" data-icon="linkedin-in" class="svg-inline--fa fa-linkedin-in fa-w-14 fa-network" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><title id="svg-inline--fa-title-sl7rAIIIvUzo">linkedin</title><path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg>
                                        </button>
                                    </div>
                                    <input name="linkedin_link" id="linkedin_link" placeholder="LinkedIn profile url" type="text" class="form-control social-link-item" value="">
                                </div>
                            </div>
                        </div>
                        <div class="with-stack form-group">
                            <div class="side-controls drag-handle" tabindex="0" data-react-beautiful-dnd-drag-handle="6" aria-roledescription="Draggable item. Press space bar to lift" draggable="false">
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                </svg>
                            </div>
                            <div class="input-stack">
                                <div class="input-group input-stack-row">
                                    <div class="input-group-prepend">
                                        <button class="btn-outline-border btn btn-secondary">
                                            <svg aria-labelledby="svg-inline--fa-title-2kZ0ogtVW5J2" data-prefix="fab" data-icon="snapchat-ghost" class="svg-inline--fa fa-snapchat-ghost fa-w-16 fa-network" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><title id="svg-inline--fa-title-2kZ0ogtVW5J2">snapchat</title><path fill="currentColor" d="M510.846 392.673c-5.211 12.157-27.239 21.089-67.36 27.318-2.064 2.786-3.775 14.686-6.507 23.956-1.625 5.566-5.623 8.869-12.128 8.869l-.297-.005c-9.395 0-19.203-4.323-38.852-4.323-26.521 0-35.662 6.043-56.254 20.588-21.832 15.438-42.771 28.764-74.027 27.399-31.646 2.334-58.025-16.908-72.871-27.404-20.714-14.643-29.828-20.582-56.241-20.582-18.864 0-30.736 4.72-38.852 4.72-8.073 0-11.213-4.922-12.422-9.04-2.703-9.189-4.404-21.263-6.523-24.13-20.679-3.209-67.31-11.344-68.498-32.15a10.627 10.627 0 0 1 8.877-11.069c69.583-11.455 100.924-82.901 102.227-85.934.074-.176.155-.344.237-.515 3.713-7.537 4.544-13.849 2.463-18.753-5.05-11.896-26.872-16.164-36.053-19.796-23.715-9.366-27.015-20.128-25.612-27.504 2.437-12.836 21.725-20.735 33.002-15.453 8.919 4.181 16.843 6.297 23.547 6.297 5.022 0 8.212-1.204 9.96-2.171-2.043-35.936-7.101-87.29 5.687-115.969C158.122 21.304 229.705 15.42 250.826 15.42c.944 0 9.141-.089 10.11-.089 52.148 0 102.254 26.78 126.723 81.643 12.777 28.65 7.749 79.792 5.695 116.009 1.582.872 4.357 1.942 8.599 2.139 6.397-.286 13.815-2.389 22.069-6.257 6.085-2.846 14.406-2.461 20.48.058l.029.01c9.476 3.385 15.439 10.215 15.589 17.87.184 9.747-8.522 18.165-25.878 25.018-2.118.835-4.694 1.655-7.434 2.525-9.797 3.106-24.6 7.805-28.616 17.271-2.079 4.904-1.256 11.211 2.46 18.748.087.168.166.342.239.515 1.301 3.03 32.615 74.46 102.23 85.934 6.427 1.058 11.163 7.877 7.725 15.859z"></path></svg>
                                        </button>
                                    </div>
                                    <input name="snapchat_link" id="snapchat_link" placeholder="Snapchat username" type="text" class="form-control social-link-item" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>