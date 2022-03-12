@extends('layouts.format')

@section('title','IoT Challenge')

@section('content')
<div class="judul section">
        <div class="kiri">
            <img src="{{ asset('images/iconIoT.png') }}" alt="">
        </div>
        <div class="kanan">
            <h1>Sebelas Maret</h1>
            <h2>International IoT Challenge 2022</h2>
            <p>Coming soon!</p>
            <button class="#about">More Information</button>
        </div>
</div>
<div class="about section">
    <div class="container">

        <div class="kiri">
            <h1>About</h1>
            <p>The Covid-19 pandemic has changed the human lifestyle around the world. In everything limited, the internet is a technology that can be relied on to break through these limitations. Therefore, the Sebelas Maret International IoT Challenge 2021 was present. This competition’s theme is "IoT Innovation For Covid-19 Pandemic Recovery, “ held by the Faculty of Engineering Universitas Sebelas Maret Surakarta. We invite undergraduate students worldwide to participate in this competition by providing Internet of Things (IoT) ideas in dealing with the Covid-19 pandemic. Through the Sebelas Maret International IoT Challenge 2021, we hope that the resulting ideas can help deal with the Covid-19 pandemic in various sectors.</p>
            <a href="/register">
                <button class="register">Register!</button>
            </a>
        </div>
        <div class="kanan">
        </div>
    </div>
</div>
<div class="poster section">

</div>
<div class="terms section">
    <div class="container">
    
        <div class="row py-5">
            <div class="col-lg-9 mx-auto">
                <div class="card shadow mb-4">
                    <div class="card-body p-5">
                        <h4 class="mb-4">Terms</h4>
                        <!-- Unordered list -->
                        <ul>
                            <li class="mb-2">Participants are undergraduate students worldwide</li>
                            <li class="mb-2">Each team consists of 3-5 students</li>
                            <li class="mb-2">Each team consists of a leader and members</li>
                            <li class="mb-2">Each team must include 1 lecturer-in-charge</li>
                            <li class="mb-2">The team must come from the same university</li>
                            <li class="mb-2">The team members can consist of various faculties or departments</li>
                            <li class="mb-2">Each participant is only allowed to be in 1 team</li>
                            <li class="mb-2">Each team only allowed to submit one title</li>
                            <li class="mb-2">Participants must follow the timeline that has been determined</li>
                            <li class="mb-2">The team that qualified for the Grand Final/Finalist Evaluation shall present the project through Zoom Cloud Meetings on May 19,2021</li>
                            <li class="mb-2">Participants who do not eligible may disqualify</li>
                            <li class="mb-2">The decision of the judges is final and cannot be changed</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="prize section">

</div>
<div class="timeline section">
    <div class="container">
        <div class="timeline">
            <h1>Timeline</h1>
                <div class="timeline-row">
                    <div class="timeline-time">
                    </div>
                    <div class="timeline-content">
                        <i class="icon-attachment"></i>
                        <h4>Open Submission</h4>
                        <p>01 March - 30 April 2021</p>
                    </div>
                </div>
                <div class="timeline-row">
                    <div class="timeline-time">
                    </div>
                    <div class="timeline-content">
                        <i class="icon-attachment"></i>
                        <h4>Desk Evaluation</h4>
                        <p>01 May - 10 May 2021</p>
                    </div>
                </div>
                <div class="timeline-row">
                    <div class="timeline-time">
                    </div>
                    <div class="timeline-content">
                        <i class="icon-attachment"></i>
                        <h4>Finalist Announcement</h4>
                        <p>11 May 2021</p>
                    </div>
                </div>
                <div class="timeline-row">
                    <div class="timeline-time">
                    </div>
                    <div class="timeline-content">
                        <i class="icon-attachment"></i>
                        <h4>Grand Final</h4>
                        <p>19 May 2021</p>
                    </div>
                </div>
                <div class="timeline-row">
                    <div class="timeline-time">
                    </div>
                    <div class="timeline-content">
                        <i class="icon-attachment"></i>
                        <h4>Awarding Session</h4>
                        <p>20 May 2021</p>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="judges section">
    <div class="container py-5">
        <h1>Judges</h1>
        <div class="row text-center">
            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="/images/zhongli.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Zhongli</h5><span class="small text-uppercase text-muted">CEO</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="/images/hutao.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Hutao</h5><span class="small text-uppercase text-muted">CEO</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="/images/ayaka.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Ayaka</h5><span class="small text-uppercase text-muted">CEO</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="/images/shenhe.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Shenhe</h5><span class="small text-uppercase text-muted">CEO</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div><!-- End -->
        </div>
    </div>
</div>
<div class="faq section">

</div>
<div class="organizedby section">
    <div class="container">
        <h1>Organized By</h1>
        <div class="cardbox">

        </div>
    </div>
</div>
<div class="sponsors section">
    <div class="container">
        <h1>Sponsors</h1>
        <div class="cardbox">

        </div>
    </div>
</div>
@endsection