<?= $this->extend('fr/layout/base1') ?>
<?= $this->section('content') ?>
<title>Ui Ele</title>
<div class="body_content">
    <!-- UI Elements Sections -->
    <section class="pb-0 pb50">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcumb-style1">
              <h2 class="title mb-3">UI Elements</h2>
              <p class="text">Give your visitor a smooth online experience with a solid UX design</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- UI Elements Sections -->
    <section class="pt0 pb90 our-ui-elements">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="ui-content">
              <h5 class="title">Accordions</h5>
              <div class="accordion-style1 mb-4 mb-lg-5">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item active">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What methods of payments are supported?</button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="accordion-body">Cras vitae ac nunc orci. Purus amet tortor non at phasellus ultricies hendrerit. Eget a, sit morbi nunc sit id massa. Metus, scelerisque volutpat nec sit vel donec.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Can I cancel at anytime?</button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="accordion-body">Cras vitae ac nunc orci. Purus amet tortor non at phasellus ultricies hendrerit. Eget a, sit morbi nunc sit id massa. Metus, scelerisque volutpat nec sit vel donec.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How do I get a receipt for my purchase?</button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="accordion-body">Cras vitae ac nunc orci. Purus amet tortor non at phasellus ultricies hendrerit. Eget a, sit morbi nunc sit id massa. Metus, scelerisque volutpat nec sit vel donec.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Which license do I need?</button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="accordion-body">Cras vitae ac nunc orci. Purus amet tortor non at phasellus ultricies hendrerit. Eget a, sit morbi nunc sit id massa. Metus, scelerisque volutpat nec sit vel donec.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">How do I get access to a theme I purchased?</button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="accordion-body">Cras vitae ac nunc orci. Purus amet tortor non at phasellus ultricies hendrerit. Eget a, sit morbi nunc sit id massa. Metus, scelerisque volutpat nec sit vel donec.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="ui-content">
              <h5 class="title">Tabs</h5>
              <div class="navpill-style1 mb70">
                <ul class="nav nav-pills mb30" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active fw500 dark-color" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Development & IT</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link fw500 dark-color" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Design & Creative</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link fw500 dark-color" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Digital Marketing</button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade fz15 text show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus. </div>
                  <div class="tab-pane fade fz15 text" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus. </div>
                  <div class="tab-pane fade fz15 text" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus. </div>
                </div>
              </div>
              <div class="navtab-style1 mb-4 mb-lg-5 mt50">
                <nav>
                  <div class="nav nav-tabs mb20" id="nav-tab2" role="tablist">
                    <button class="nav-link active fw600" id="nav-item1-tab" data-bs-toggle="tab" data-bs-target="#nav-item1" type="button" role="tab" aria-controls="nav-item1" aria-selected="true">Items 1</button>
                    <button class="nav-link fw600" id="nav-item2-tab" data-bs-toggle="tab" data-bs-target="#nav-item2" type="button" role="tab" aria-controls="nav-item2" aria-selected="false">Items 2</button>
                    <button class="nav-link fw600" id="nav-item3-tab" data-bs-toggle="tab" data-bs-target="#nav-item3" type="button" role="tab" aria-controls="nav-item3" aria-selected="false">Items 3</button>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active fz15 text" id="nav-item1" role="tabpanel" aria-labelledby="nav-item1-tab">Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus. </div>
                  <div class="tab-pane fade fz15 text" id="nav-item2" role="tabpanel" aria-labelledby="nav-item2-tab">Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus. </div>
                  <div class="tab-pane fade fz15 text" id="nav-item3" role="tabpanel" aria-labelledby="nav-item3-tab">Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus. </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="ui-content">
              <h5 class="title">Table</h5>
              <div class="table-style1 table-responsive mb-4 mb-lg-5">
                <table class="table table-borderless">
                  <thead class="thead-light">
                    <tr>
                      <th class="fz15 fw500" scope="col">Description</th>
                      <th class="fz15 fw500" scope="col">Hour</th>
                      <th class="fz15 fw500" scope="col">Quantity</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Design UX and UI</td>
                      <td>14</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>Design UX and UI</td>
                      <td>14</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>Design UX and UI</td>
                      <td>14</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>Design UX and UI</td>
                      <td>14</td>
                      <td>3</td>
                    </tr>
                  </tbody>
                </table>                
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="ui-content">
              <h5 class="title">Message Boxes</h5>
              <div class="message-alart-style1">
                <div class="alert alart_style_one alert-dismissible fade show mb20" role="alert">Info: User pending action
                  <i class="far fa-xmark btn-close" data-bs-dismiss="alert" aria-label="Close"></i>
                </div>
                <div class="alert alart_style_two alert-dismissible fade show mb20" role="alert">Warning: User has to be admin
                  <i class="far fa-xmark btn-close" data-bs-dismiss="alert" aria-label="Close"></i>
                </div>
                <div class="alert alart_style_three alert-dismissible fade show mb20" role="alert">Error: Internal Server Error
                  <i class="far fa-xmark btn-close" data-bs-dismiss="alert" aria-label="Close"></i>
                </div>
                <div class="alert alart_style_four alert-dismissible fade show mb20" role="alert">Success: Updated members status
                  <i class="far fa-xmark btn-close" data-bs-dismiss="alert" aria-label="Close"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="ui-content">
              <h5 class="title">Buttons</h5>
            </div>
          </div>
          <div class="col-lg-10">
            <div class="ui-content mb-4">
              <div class="button-list">
                <a href="#" class="ud-btn btn-thm mb25 me-4">Button Primary<i class="fal fa-arrow-right-long"></i></a>
                <a href="#" class="ud-btn btn-dark mb25 me-4">Button Primary Hover<i class="fal fa-arrow-right-long"></i></a>
                <a href="#" class="ud-btn btn-white mb25 me-4">Button Third<i class="fal fa-arrow-right-long"></i></a>
                <a href="#" class="ud-btn btn-light-gray mb25 me-4">Button Third Hover<i class="fal fa-arrow-right-long"></i></a>
                <a href="#" class="ud-btn btn-light-gray mb25 filter-btn-left me-4">LeftSide HiddenBar<i class="fal fa-arrow-right-long"></i></a>
                <a href="#" class="ud-btn btn-light-gray mb25 filter-btn-right me-4">RightSide HiddenBar<i class="fal fa-arrow-right-long"></i></a>
                <a href="#" class="ud-btn btn-thm2 mb25 me-4">Button Secondary<i class="fal fa-arrow-right-long"></i></a>
                <a href="#" class="ud-btn btn-thm mb25">Button Secondary Hover<i class="fal fa-arrow-right-long"></i></a>
                <a href="#" class="ud-btn btn-thm-border mb25 me-4">Button Third<i class="fal fa-arrow-right-long"></i></a>
                <a href="#" class="ud-btn btn-light-gray mb25 me-4">Button Third Hover<i class="fal fa-arrow-right-long"></i></a>
                <a href="#" class="ud-btn btn-white2 mb25 me-4">Button Third<i class="fal fa-arrow-right-long"></i></a>
                <a href="#" class="ud-btn btn-light-thm mb25 me-4">Button Light Theme<i class="fal fa-arrow-right-long"></i></a>
                <a href="#" class="ud-btn btn-transparent mb25 me-4">Button Fourth<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="ui-content mt10">
              <h5 class="title">Form</h5>
            </div>
          </div>
          <div class="col-lg-6 col-xl-5">
            <div class="ui-content mb40">
              <div class="form-style1">
                <label class="form-label fw500 fz16 dark-color">Input</label>
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-5 offset-xl-1">
            <div class="ui-content mb40">
              <div class="form-style1">
                <label class="form-label fw500 fz16 dark-color">Input Focus</label>
                <input type="text" class="form-control active" placeholder="Your Name">
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-5">
            <div class="ui-content mb40">
              <div class="form-style1">
                <label class="form-label fw500 fz16 dark-color">Search Select boxes, Hover</label>
                <div class="bootselect-multiselect">
                  <select class="selectpicker" data-live-search="true" data-width="100%">
                    <option>Search</option>
                    <option data-tokens="Banking">Banking</option>
                    <option data-tokens="Digital&Creative">Digital & Creative</option>
                    <option data-tokens="Retail">Retail</option>
                    <option data-tokens="Designer">Designer</option>
                    <option data-tokens="Developer">Developer</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-5 offset-xl-1">
            <div class="ui-content mb40">
              <div class="form-style1">
                <label class="form-label fw500 fz16 dark-color">Search Select boxes, Hover</label>
                <div class="bootselect-multiselect">
                  <select class="selectpicker" multiple>
                    <option>Search</option>
                    <option>Banking</option>
                    <option>Digital & Creative</option>
                    <option>Retail</option>
                    <option>Designer</option>
                    <option>Developer</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-xl-5">
            <div class="ui-content mb40">
              <div class="form-style1">
                <label class="form-label fw500 fz16 dark-color">Textarea</label>
                <textarea name="text" id="textarea1" cols="30" rows="7">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</textarea>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-5 offset-xl-1">
            <div class="row">
              <div class="col-auto">
                <div class="ui-content">
                  <h5 class="title fz15 mb20 mt50">Radiobox</h5>
                  <div class="radiobox-style1">
                    <div class="radio-element">
                      <div class="form-check d-flex align-items-center mb15">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">Items</label>
                      </div>
                      <div class="form-check d-flex align-items-center mb15">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">Items</label>
                      </div>
                      <div class="form-check d-flex align-items-center mb15">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked="checked">
                        <label class="form-check-label" for="flexRadioDefault3">Items</label>
                      </div>
                      <div class="form-check d-flex align-items-center">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                        <label class="form-check-label" for="flexRadioDefault4">Items</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <div class="ui-content">
                  <h5 class="title fz15 mb20 mt50">Checkbox</h5>
                  <div class="checkbox-style1">
                    <label class="custom_checkbox">Items
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Items
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Items
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Items
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <div class="ui-content">
                  <h5 class="title fz15 mb20 mt50">Switch</h5>
                  <div class="switch-style1">
                    <div class="form-check form-switch mb20">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                      <label class="form-check-label" for="flexSwitchCheckDefault">Items</label>
                    </div>
                  </div>
                  <div class="switch-style1">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault2" checked="checked">
                      <label class="form-check-label" for="flexSwitchCheckDefault2">Items</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="ui-content">
              <h5 class="title">Tooltips</h5>
              <div class="tooltip-list">
                <button type="button" class="ud-btn btn-gray me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">Top</button>
                <button type="button" class="ud-btn btn-gray me-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">Bottom</button>
                <button type="button" class="ud-btn btn-gray me-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">Right</button>
                <button type="button" class="ud-btn btn-gray" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">Left</button>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="ui-content">
              <h5 class="title">Progress bars</h5>
              <div class="progressbar-style1">
                <div class="progressbar-bg"></div>
                <div class="progressd-bar" style="width: 90%;"><span>90%</span></div>
              </div>
              <div class="progressbar-style1 mt50">
                <div class="progressbar-bg"></div>
                <div class="progressd-bar" style="width: 50%;"><span>50%</span></div>
              </div>
              <div class="progressbar-style1 mt50">
                <div class="progressbar-bg"></div>
                <div class="progressd-bar" style="width: 40%;"><span>40%</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="ui-content">
              <h5 class="title">Range Slider</h5>
              <!-- Range Slider Desktop Version -->
              <div class="range-slider-style1 mb-4 mb-lg-5">
                <div class="range-wrapper">
                  <div class="slider-range mt35 mb20"></div>
                  <div class="text-center">
                    <input type="text" class="amount" placeholder="$20"><span class="fa-sharp fa-solid fa-minus mx-2 dark-color"></span>
                    <input type="text" class="amount2" placeholder="$70987">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="ui-content">
              <h5 class="title">Typography</h5>
              <h5 class="mb20">Bringing the culture of sharing to everyone</h5>
              <p class="mb25 ff-heading text">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue. Nullam tempus sollicitudin cursus. Ut et adipiscing erat. Curabitur this is a text link libero tempus congue.</p>
              <p class="ff-heading text mb60">Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tristique elit lobortis purus bibendum, quis dictum metus mattis. Phasellus posuere felis sed eros porttitor mattis. Curabitur massa magna, tempor in blandit id, porta in ligula. Aliquam laoreet nisl massa, at interdum mauris sollicitudin et.</p>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="blockquote-style1 mb-4 mb-lg-5">
              <blockquote class="blockquote">
                <p class="fst-italic fz15 fw500 ff-heading dark-color">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue.</p>
                <h6 class="quote-title">Luis Pickford</h6>
              </blockquote>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="ui-content mt15">
              <h5 class="title">What you'll learn</h5>
            </div>
            <div class="row">
              <div class="col-auto">
                <div class="ui-content">
                  <div class="list-style1">
                    <ul>
                      <li><i class="far fa-check text-thm3 bgc-thm3-light"></i>Become a UI/UX designer.</li>
                      <li><i class="far fa-check text-thm3 bgc-thm3-light"></i>You will be able to start earning money Figma skills.</li>
                      <li><i class="far fa-check text-thm3 bgc-thm3-light"></i>Build a UI project from beginning to end.</li>
                      <li><i class="far fa-check text-thm3 bgc-thm3-light"></i>Work with colors & fonts.</li>
                      <li><i class="far fa-check text-thm3 bgc-thm3-light"></i>You will create your own UI Kit.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <div class="ui-content">
                  <div class="list-style1">
                    <ul>
                      <li><i class="far fa-check text-thm3 bgc-thm3-light"></i>Build & test a complete mobile app.</li>
                      <li><i class="far fa-check text-thm3 bgc-thm3-light"></i>Learn to design mobile apps & websites.</li>
                      <li><i class="far fa-check text-thm3 bgc-thm3-light"></i>Design 3 different logos.</li>
                      <li><i class="far fa-check text-thm3 bgc-thm3-light"></i>Create low-fidelity wireframe.</li>
                      <li><i class="far fa-check text-thm3 bgc-thm3-light"></i>Downloadable exercise files.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="advance-search-field position-relative bdr1">
                  <form action="#" method="get" class="form-search form-style1 position-relative" accept-charset="utf-8">
                    <div class="box-search">
                      <span class="icon fal fa-magnifying-glass"></span>
                      <input class="form-control bdrs12" type="text" name="search" placeholder="Search products…">
                      <div class="search-suggestions">
                        <h6 class="ml30 mt25 mb-3">Popular Search</h6>
                        <div class="box-suggestions">
                          <ul class="ps-0 m-0 pb30">
                            <li>
                              <div class="info-product">
                                <div class="item_title">mobile app development</div>
                              </div>
                            </li>
                            <li>
                              <div class="info-product">
                                <div class="item_title">mobile app builder</div>
                              </div>
                            </li>
                            <li>
                              <div class="info-product">
                                <div class="item_title">mobile legends</div>
                              </div>
                            </li>
                            <li>
                              <div class="info-product">
                                <div class="item_title">mobile app ui ux design</div>
                              </div>
                            </li>
                            <li>
                              <div class="info-product">
                                <div class="item_title">mobile game app development</div>
                              </div>
                            </li>
                            <li>
                              <div class="info-product">
                                <div class="item_title">mobile app design</div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="ui-content mt15">
              <div class="popup-search-field search_area">
                <input type="text" class="form-control border-0" placeholder="What service are you looking for today?">
                <label><span class="far fa-magnifying-glass"></span></label>
                <button class="ud-btn btn-thm" type="submit">Search</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?= $this->endSection() ?>