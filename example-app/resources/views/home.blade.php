<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SeoPage1 Task</title>
    <!-- My Css -->
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}" />
    <!-- bootstrap & fontawesome -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Myscript -->
    <script src="../js/attchment.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
  </head>
  <body>
    <!-- modal -->
    <div class="modal" id="attachmentModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Your Attachment</h5>
            <button
              type="button"
              class="close border-0"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div
            class="modal-body d-flex flex-column justify-content-center align-items-center"
          >
            <!-- Your modal content goes here -->
            <div class="dropzone mb-4" id="myDropzone">
              <img src="resources/assets/upload.svg" class="upload-icon" />
              <input type="file" accept="image/*" class="upload-input" multiple/>
            </div>
            <button type="button" class="btn btn-primary" name="uploadbutton" onclick="uploadFiles()">
              Upload file
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- main content -->
    <section class="container-fluid m-4">
      <div class="row gap-3 flex-nowrap overflow-auto pe-4 me-4 custom-scrollbar">
        <!-- incomplete -->
        <div class="col-3 primary-bg py-2">
          <div
            class="column-title d-flex flex-row align-items-center justify-content-between fw-bold fontSize pb-3"
          >
            <div class="d-flex flex-row align-items-center gap-1">
              <img src="{{ URL::asset('resources/assets/shape (3).png') }}" alt="" />
              <p class="mb-0">Incomplete</p>
            </div>

            <p class="secondary-bg px-2 py-1 mb-0">0</p>
          </div>
          <div class="scrollable-column">
            <!-- card start here -->
            <div class="card border-0 mb-3" style="width: 100%">
              <div class="card-body">
                <!-- first line -->
                <div class="first d-flex justify-content-between">
                  <div
                    class="Client d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img3.jpg"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Client Name</div>
                  </div>
                  <div
                    class="Worker d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img1.jfif"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Sadik Istiak</div>
                  </div>
                </div>
                <!-- second line -->
                <div
                  class="second my-3 d-flex justify-content-between align-items-center"
                >
                  <div
                    class="d-flex justify-content-between flex-row align-items-center gap-2"
                  >
                    <i class="fas fa-layer-group icon"></i>
                    <p class="my-0 fontSize">
                      Lorem ipsum dolor sit amet consec...
                    </p>
                  </div>
                  <div class="primary-bg px-1 fontSize">
                    <i class="fas fa-trash-alt icon"></i> 1/2
                  </div>
                </div>
                <!-- third line -->
                <div
                  class="third align-items-center d-flex justify-content-between align-items-center"
                >
                  <div class="image1">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img1.jfif"
                      alt=""
                    />
                  </div>
                  <div class="image2">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img2.png"
                      alt=""
                    />
                  </div>
                  <div class="small-box primary-bg rounded-circle fw-bold">
                    12+
                  </div>
                  <div class="comment">
                    <i class="fas fa-envelope icon"></i> 15
                  </div>
                  <div
                    class="attachment bg-info"
                    data-toggle="modal"
                    data-target="#attachmentModal"
                  >
                    <i class="fas fa-paperclip"></i> 25
                  </div>
                  <div class="date">
                    <i class="far fa-calendar-alt"></i> 30-12-2022
                  </div>
                </div>
              </div>
            </div>
            <!-- card end here -->
            <!-- card start here -->
            <div class="card border-0" style="width: 100%">
              <div class="card-body">
                <!-- first line -->
                <div class="first d-flex justify-content-between">
                  <div
                    class="Client d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img3.jpg"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Client Name</div>
                  </div>
                  <div
                    class="Worker d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img1.jfif"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Sadik Istiak</div>
                  </div>
                </div>
                <!-- second line -->
                <div
                  class="second my-3 d-flex justify-content-between align-items-center"
                >
                  <div
                    class="d-flex justify-content-between flex-row align-items-center gap-2"
                  >
                    <i class="fas fa-layer-group icon"></i>
                    <p class="my-0 fontSize">
                      Lorem ipsum dolor sit amet consec...
                    </p>
                  </div>
                  <div class="primary-bg px-1 fontSize">
                    <i class="fas fa-trash-alt icon"></i> 1/2
                  </div>
                </div>
                <!-- third line -->
                <div
                  class="third align-items-center d-flex justify-content-between align-items-center"
                >
                  <div class="image1">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img1.jfif"
                      alt=""
                    />
                  </div>
                  <div class="image2">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img2.png"
                      alt=""
                    />
                  </div>
                  <div class="small-box primary-bg rounded-circle fw-bold">
                    12+
                  </div>
                  <div class="comment">
                    <i class="fas fa-envelope icon"></i> 15
                  </div>
                  <div
                    class="attachment"
                    data-toggle="modal"
                    data-target="#attachmentModal"
                  >
                    <i class="fas fa-paperclip"></i> 25
                  </div>
                  <div class="date">
                    <i class="far fa-calendar-alt"></i> 30-12-2022
                  </div>
                </div>
              </div>
            </div>
            <!-- card end here -->
          </div>
        </div>
        <!-- To Do -->
        <div class="col-3 primary-bg py-2">
          <div
            class="column-title d-flex flex-row align-items-center justify-content-between fw-bold fontSize pb-3"
          >
            <div class="d-flex flex-row align-items-center gap-1">
              <img src="resources/assets/shape (2).png" alt="" />
              <p class="mb-0">To Do</p>
            </div>

            <p class="secondary-bg px-2 py-1 mb-0">0</p>
          </div>
          <div class="scrollable-column">
            <!-- card start here -->
            <div class="card border-0 mb-3" style="width: 100%">
              <div class="card-body">
                <!-- first line -->
                <div class="first d-flex justify-content-between">
                  <div
                    class="Client d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img3.jpg"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Client Name</div>
                  </div>
                  <div
                    class="Worker d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img1.jfif"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Sadik Istiak</div>
                  </div>
                </div>
                <!-- second line -->
                <div
                  class="second my-3 d-flex justify-content-between align-items-center"
                >
                  <div
                    class="d-flex justify-content-between flex-row align-items-center gap-2"
                  >
                    <i class="fas fa-layer-group icon"></i>
                    <p class="my-0 fontSize">
                      Lorem ipsum dolor sit amet consec...
                    </p>
                  </div>
                  <div class="primary-bg px-1 fontSize">
                    <i class="fas fa-trash-alt icon"></i> 1/2
                  </div>
                </div>
                <!-- third line -->
                <div
                  class="third align-items-center d-flex justify-content-between align-items-center"
                >
                  <div class="image1">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img1.jfif"
                      alt=""
                    />
                  </div>
                  <div class="image2">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img2.png"
                      alt=""
                    />
                  </div>
                  <div class="small-box primary-bg rounded-circle fw-bold">
                    12+
                  </div>
                  <div class="comment">
                    <i class="fas fa-envelope icon"></i> 15
                  </div>
                  <div class="attachment">
                    <i class="fas fa-paperclip"></i> 25
                  </div>
                  <div class="date">
                    <i class="far fa-calendar-alt"></i> 30-12-2022
                  </div>
                </div>
              </div>
            </div>
            <!-- card end here -->
            <!-- card start here -->
            <div class="card border-0" style="width: 100%">
              <div class="card-body">
                <!-- first line -->
                <div class="first d-flex justify-content-between">
                  <div
                    class="Client d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img3.jpg"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Client Name</div>
                  </div>
                  <div
                    class="Worker d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img1.jfif"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Sadik Istiak</div>
                  </div>
                </div>
                <!-- second line -->
                <div
                  class="second my-3 d-flex justify-content-between align-items-center"
                >
                  <div
                    class="d-flex justify-content-between flex-row align-items-center gap-2"
                  >
                    <i class="fas fa-layer-group icon"></i>
                    <p class="my-0 fontSize">
                      Lorem ipsum dolor sit amet consec...
                    </p>
                  </div>
                  <div class="primary-bg px-1 fontSize">
                    <i class="fas fa-trash-alt icon"></i> 1/2
                  </div>
                </div>
                <!-- third line -->
                <div
                  class="third align-items-center d-flex justify-content-between align-items-center"
                >
                  <div class="image1">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img1.jfif"
                      alt=""
                    />
                  </div>
                  <div class="image2">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img2.png"
                      alt=""
                    />
                  </div>
                  <div class="small-box primary-bg rounded-circle fw-bold">
                    12+
                  </div>
                  <div class="comment">
                    <i class="fas fa-envelope icon"></i> 15
                  </div>
                  <div class="attachment">
                    <i class="fas fa-paperclip"></i> 25
                  </div>
                  <div class="date">
                    <i class="far fa-calendar-alt"></i> 30-12-2022
                  </div>
                </div>
              </div>
            </div>
            <!-- card end here -->
          </div>
        </div>
        <!-- Doing -->
        <div class="col-3 primary-bg py-2">
          <div
            class="column-title d-flex flex-row align-items-center justify-content-between fw-bold fontSize pb-3"
          >
            <div class="d-flex flex-row align-items-center gap-1">
              <img src="resources/assets/shape (1).png" alt="" />
              <p class="mb-0">Doing</p>
            </div>

            <p class="secondary-bg px-2 py-1 mb-0">0</p>
          </div>
          <div class="scrollable-column">
            <!-- card start here -->
            <div class="card border-0 mb-3" style="width: 100%">
              <div class="card-body">
                <!-- first line -->
                <div class="first d-flex justify-content-between">
                  <div
                    class="Client d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img3.jpg"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Client Name</div>
                  </div>
                  <div
                    class="Worker d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img1.jfif"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Sadik Istiak</div>
                  </div>
                </div>
                <!-- second line -->
                <div
                  class="second my-3 d-flex justify-content-between align-items-center"
                >
                  <div
                    class="d-flex justify-content-between flex-row align-items-center gap-2"
                  >
                    <i class="fas fa-layer-group icon"></i>
                    <p class="my-0 fontSize">
                      Lorem ipsum dolor sit amet consec...
                    </p>
                  </div>
                  <div class="primary-bg px-1 fontSize">
                    <i class="fas fa-trash-alt icon"></i> 1/2
                  </div>
                </div>
                <!-- third line -->
                <div
                  class="third align-items-center d-flex justify-content-between align-items-center"
                >
                  <div class="image1">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img1.jfif"
                      alt=""
                    />
                  </div>
                  <div class="image2">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img2.png"
                      alt=""
                    />
                  </div>
                  <div class="small-box primary-bg rounded-circle fw-bold">
                    12+
                  </div>
                  <div class="comment">
                    <i class="fas fa-envelope icon"></i> 15
                  </div>
                  <div class="attachment">
                    <i class="fas fa-paperclip"></i> 25
                  </div>
                  <div class="date">
                    <i class="far fa-calendar-alt"></i> 30-12-2022
                  </div>
                </div>
              </div>
            </div>
            <!-- card end here -->
            <!-- card start here -->
            <div class="card border-0" style="width: 100%">
              <div class="card-body">
                <!-- first line -->
                <div class="first d-flex justify-content-between">
                  <div
                    class="Client d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img3.jpg"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Client Name</div>
                  </div>
                  <div
                    class="Worker d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img1.jfif"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Sadik Istiak</div>
                  </div>
                </div>
                <!-- second line -->
                <div
                  class="second my-3 d-flex justify-content-between align-items-center"
                >
                  <div
                    class="d-flex justify-content-between flex-row align-items-center gap-2"
                  >
                    <i class="fas fa-layer-group icon"></i>
                    <p class="my-0 fontSize">
                      Lorem ipsum dolor sit amet consec...
                    </p>
                  </div>
                  <div class="primary-bg px-1 fontSize">
                    <i class="fas fa-trash-alt icon"></i> 1/2
                  </div>
                </div>
                <!-- third line -->
                <div
                  class="third align-items-center d-flex justify-content-between align-items-center"
                >
                  <div class="image1">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img1.jfif"
                      alt=""
                    />
                  </div>
                  <div class="image2">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img2.png"
                      alt=""
                    />
                  </div>
                  <div class="small-box primary-bg rounded-circle fw-bold">
                    12+
                  </div>
                  <div class="comment">
                    <i class="fas fa-envelope icon"></i> 15
                  </div>
                  <div class="attachment">
                    <i class="fas fa-paperclip"></i> 25
                  </div>
                  <div class="date">
                    <i class="far fa-calendar-alt"></i> 30-12-2022
                  </div>
                </div>
              </div>
            </div>
            <!-- card end here -->
          </div>
        </div>
        <!-- Under Review -->
        <div class="col-3 primary-bg py-2">
          <div
            class="column-title d-flex flex-row align-items-center justify-content-between fw-bold fontSize pb-3"
          >
            <div class="d-flex flex-row align-items-center gap-1">
              <img src="" alt="" />
              <p class="mb-0">Under Review</p>
            </div>

            <p class="secondary-bg px-2 py-1 mb-0">0</p>
          </div>
          <div class="scrollable-column">
            <!-- card start here -->
            <div class="card border-0 mb-3" style="width: 100%">
              <div class="card-body">
                <!-- first line -->
                <div class="first d-flex justify-content-between">
                  <div
                    class="Client d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img3.jpg"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Client Name</div>
                  </div>
                  <div
                    class="Worker d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img1.jfif"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Sadik Istiak</div>
                  </div>
                </div>
                <!-- second line -->
                <div
                  class="second my-3 d-flex justify-content-between align-items-center"
                >
                  <div
                    class="d-flex justify-content-between flex-row align-items-center gap-2"
                  >
                    <i class="fas fa-layer-group icon"></i>
                    <p class="my-0 fontSize">
                      Lorem ipsum dolor sit amet consec...
                    </p>
                  </div>
                  <div class="primary-bg px-1 fontSize">
                    <i class="fas fa-trash-alt icon"></i> 1/2
                  </div>
                </div>
                <!-- third line -->
                <div
                  class="third align-items-center d-flex justify-content-between align-items-center"
                >
                  <div class="image1">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img1.jfif"
                      alt=""
                    />
                  </div>
                  <div class="image2">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img2.png"
                      alt=""
                    />
                  </div>
                  <div class="small-box primary-bg rounded-circle fw-bold">
                    12+
                  </div>
                  <div class="comment">
                    <i class="fas fa-envelope icon"></i> 15
                  </div>
                  <div class="attachment">
                    <i class="fas fa-paperclip"></i> 25
                  </div>
                  <div class="date">
                    <i class="far fa-calendar-alt"></i> 30-12-2022
                  </div>
                </div>
              </div>
            </div>
            <!-- card end here -->
            <!-- card start here -->
            <div class="card border-0" style="width: 100%">
              <div class="card-body">
                <!-- first line -->
                <div class="first d-flex justify-content-between">
                  <div
                    class="Client d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img3.jpg"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Client Name</div>
                  </div>
                  <div
                    class="Worker d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img1.jfif"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Sadik Istiak</div>
                  </div>
                </div>
                <!-- second line -->
                <div
                  class="second my-3 d-flex justify-content-between align-items-center"
                >
                  <div
                    class="d-flex justify-content-between flex-row align-items-center gap-2"
                  >
                    <i class="fas fa-layer-group icon"></i>
                    <p class="my-0 fontSize">
                      Lorem ipsum dolor sit amet consec...
                    </p>
                  </div>
                  <div class="primary-bg px-1 fontSize">
                    <i class="fas fa-trash-alt icon"></i> 1/2
                  </div>
                </div>
                <!-- third line -->
                <div
                  class="third align-items-center d-flex justify-content-between align-items-center"
                >
                  <div class="image1">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img1.jfif"
                      alt=""
                    />
                  </div>
                  <div class="image2">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img2.png"
                      alt=""
                    />
                  </div>
                  <div class="small-box primary-bg rounded-circle fw-bold">
                    12+
                  </div>
                  <div class="comment">
                    <i class="fas fa-envelope icon"></i> 15
                  </div>
                  <div class="attachment">
                    <i class="fas fa-paperclip"></i> 25
                  </div>
                  <div class="date">
                    <i class="far fa-calendar-alt"></i> 30-12-2022
                  </div>
                </div>
              </div>
            </div>
            <!-- card end here -->
          </div>
        </div>
        <!-- Completed -->
        <div class="col-3 primary-bg py-2">
          <div
            class="column-title d-flex flex-row align-items-center justify-content-between fw-bold fontSize pb-3"
          >
            <div class="d-flex flex-row align-items-center gap-1">
              <img src="" alt="" />
              <p class="mb-0">Completed</p>
            </div>

            <p class="secondary-bg px-2 py-1 mb-0">0</p>
          </div>
          <div class="scrollable-column">
            <!-- card start here -->
            <div class="card border-0 mb-3" style="width: 100%">
              <div class="card-body">
                <!-- first line -->
                <div class="first d-flex justify-content-between">
                  <div
                    class="Client d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img3.jpg"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Client Name</div>
                  </div>
                  <div
                    class="Worker d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img1.jfif"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Sadik Istiak</div>
                  </div>
                </div>
                <!-- second line -->
                <div
                  class="second my-3 d-flex justify-content-between align-items-center"
                >
                  <div
                    class="d-flex justify-content-between flex-row align-items-center gap-2"
                  >
                    <i class="fas fa-layer-group icon"></i>
                    <p class="my-0 fontSize">
                      Lorem ipsum dolor sit amet consec...
                    </p>
                  </div>
                  <div class="primary-bg px-1 fontSize">
                    <i class="fas fa-trash-alt icon"></i> 1/2
                  </div>
                </div>
                <!-- third line -->
                <div
                  class="third align-items-center d-flex justify-content-between align-items-center"
                >
                  <div class="image1">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img1.jfif"
                      alt=""
                    />
                  </div>
                  <div class="image2">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img2.png"
                      alt=""
                    />
                  </div>
                  <div class="small-box primary-bg rounded-circle fw-bold">
                    12+
                  </div>
                  <div class="comment">
                    <i class="fas fa-envelope icon"></i> 15
                  </div>
                  <div class="attachment">
                    <i class="fas fa-paperclip"></i> 25
                  </div>
                  <div class="date">
                    <i class="far fa-calendar-alt"></i> 30-12-2022
                  </div>
                </div>
              </div>
            </div>
            <!-- card end here -->
            <!-- card start here -->
            <div class="card border-0" style="width: 100%">
              <div class="card-body">
                <!-- first line -->
                <div class="first d-flex justify-content-between">
                  <div
                    class="Client d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img3.jpg"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Client Name</div>
                  </div>
                  <div
                    class="Worker d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img1.jfif"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Sadik Istiak</div>
                  </div>
                </div>
                <!-- second line -->
                <div
                  class="second my-3 d-flex justify-content-between align-items-center"
                >
                  <div
                    class="d-flex justify-content-between flex-row align-items-center gap-2"
                  >
                    <i class="fas fa-layer-group icon"></i>
                    <p class="my-0 fontSize">
                      Lorem ipsum dolor sit amet consec...
                    </p>
                  </div>
                  <div class="primary-bg px-1 fontSize">
                    <i class="fas fa-trash-alt icon"></i> 1/2
                  </div>
                </div>
                <!-- third line -->
                <div
                  class="third align-items-center d-flex justify-content-between align-items-center"
                >
                  <div class="image1">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img1.jfif"
                      alt=""
                    />
                  </div>
                  <div class="image2">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img2.png"
                      alt=""
                    />
                  </div>
                  <div class="small-box primary-bg rounded-circle fw-bold">
                    12+
                  </div>
                  <div class="comment">
                    <i class="fas fa-envelope icon"></i> 15
                  </div>
                  <div class="attachment">
                    <i class="fas fa-paperclip"></i> 25
                  </div>
                  <div class="date">
                    <i class="far fa-calendar-alt"></i> 30-12-2022
                  </div>
                </div>
              </div>
            </div>
            <!-- card end here -->
          </div>
        </div>
        <!-- Overdone -->
        <div class="col-3 primary-bg py-2">
          <div
            class="column-title d-flex flex-row align-items-center justify-content-between fw-bold fontSize pb-3"
          >
            <div class="d-flex flex-row align-items-center gap-1">
              <img src="" alt="" />
              <p class="mb-0">Overdone</p>
            </div>

            <p class="secondary-bg px-2 py-1 mb-0">0</p>
          </div>
          <div class="scrollable-column">
            <!-- card start here -->
            <div class="card border-0 mb-3" style="width: 100%">
              <div class="card-body">
                <!-- first line -->
                <div class="first d-flex justify-content-between">
                  <div
                    class="Client d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img3.jpg"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Client Name</div>
                  </div>
                  <div
                    class="Worker d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img1.jfif"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Sadik Istiak</div>
                  </div>
                </div>
                <!-- second line -->
                <div
                  class="second my-3 d-flex justify-content-between align-items-center"
                >
                  <div
                    class="d-flex justify-content-between flex-row align-items-center gap-2"
                  >
                    <i class="fas fa-layer-group icon"></i>
                    <p class="my-0 fontSize">
                      Lorem ipsum dolor sit amet consec...
                    </p>
                  </div>
                  <div class="primary-bg px-1 fontSize">
                    <i class="fas fa-trash-alt icon"></i> 1/2
                  </div>
                </div>
                <!-- third line -->
                <div
                  class="third align-items-center d-flex justify-content-between align-items-center"
                >
                  <div class="image1">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img1.jfif"
                      alt=""
                    />
                  </div>
                  <div class="image2">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img2.png"
                      alt=""
                    />
                  </div>
                  <div class="small-box primary-bg rounded-circle fw-bold">
                    12+
                  </div>
                  <div class="comment">
                    <i class="fas fa-envelope icon"></i> 15
                  </div>
                  <div class="attachment">
                    <i class="fas fa-paperclip"></i> 25
                  </div>
                  <div class="date">
                    <i class="far fa-calendar-alt"></i> 30-12-2022
                  </div>
                </div>
              </div>
            </div>
            <!-- card end here -->
            <!-- card start here -->
            <div class="card border-0" style="width: 100%">
              <div class="card-body">
                <!-- first line -->
                <div class="first d-flex justify-content-between">
                  <div
                    class="Client d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img3.jpg"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Client Name</div>
                  </div>
                  <div
                    class="Worker d-flex justify-content-between align-items-center gap-1"
                  >
                    <div class="image1">
                      <img
                        class="small-box rounded-circle"
                        src="resources/assets/img1.jfif"
                        alt=""
                      />
                    </div>
                    <div class="name fw-bold fontSize">Sadik Istiak</div>
                  </div>
                </div>
                <!-- second line -->
                <div
                  class="second my-3 d-flex justify-content-between align-items-center"
                >
                  <div
                    class="d-flex justify-content-between flex-row align-items-center gap-2"
                  >
                    <i class="fas fa-layer-group icon"></i>
                    <p class="my-0 fontSize">
                      Lorem ipsum dolor sit amet consec...
                    </p>
                  </div>
                  <div class="primary-bg px-1 fontSize">
                    <i class="fas fa-trash-alt icon"></i> 1/2
                  </div>
                </div>
                <!-- third line -->
                <div
                  class="third align-items-center d-flex justify-content-between align-items-center"
                >
                  <div class="image1">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img1.jfif"
                      alt=""
                    />
                  </div>
                  <div class="image2">
                    <img
                      class="small-box rounded-circle"
                      src="resources/assets/img2.png"
                      alt=""
                    />
                  </div>
                  <div class="small-box primary-bg rounded-circle fw-bold">
                    12+
                  </div>
                  <div class="comment">
                    <i class="fas fa-envelope icon"></i> 15
                  </div>
                  <div class="attachment">
                    <i class="fas fa-paperclip"></i> 25
                  </div>
                  <div class="date">
                    <i class="far fa-calendar-alt"></i> 30-12-2022
                  </div>
                </div>
              </div>
            </div>
            <!-- card end here -->
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
