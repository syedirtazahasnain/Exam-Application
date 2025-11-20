{{-- @extends('layouts.student')
@section('title','Result')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid p-3" style="background: white;">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0" style="color: #2B3990; font-weight: 600;">Exam Result</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right bg-white my-0">
                    <li class="breadcrumb-item"><a href="#" style="color: #2B3990;">Home</a></li>
                    <li class="breadcrumb-item active">Result</li>
                </ol>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <!-- Compact Result Card -->
                    <div class="card mt-4 shadow-sm border-0" style="border-radius: 12px; overflow: hidden;">
                        <!-- Card Header -->
                        <div class="card-header py-3 px-4" style="background: linear-gradient(135deg, #2B3990 0%, #1a237e 100%); border: none;">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="student-avatar bg-white text-primary rounded-circle d-flex align-items-center justify-content-center mr-3" 
                                         style="width: 45px; height: 45px; font-size: 16px; font-weight: 600;">
                                        {{ substr($student_info->name, 0, 1) }}
                                    </div>
                                    <div>
                                        <h5 class="mb-0 text-white" style="font-weight: 600;">{{ $student_info->name }}</h5>
                                        <small class="text-white-50">{{ $student_info->email }}</small>
                                    </div>
                                </div>
                                <span class="badge badge-light px-3 py-2" style="font-size: 12px; background: rgba(255,255,255,0.9); color: #2B3990;">
                                    <i class="fas fa-calendar-alt mr-1"></i> {{ \Carbon\Carbon::parse($exam_info->exam_date)->format('M d, Y') }}
                                </span>
                            </div>
                        </div>
                        
                        <div class="card-body p-4">
                            <!-- Exam Info & Score in one row -->
                            <div class="row align-items-center mb-4">
                                <div class="col-md-8">
                                    <h6 class="text-muted mb-1">Exam Name</h6>
                                    <h5 style="color: #2B3990; font-weight: 600;">{{ $exam_info->title }}</h5>
                                </div>
                                <div class="col-md-4 text-center">
                                    @php
                                        $total_questions = $result_info->yes_ans + $result_info->no_ans;
                                        $percentage = $total_questions > 0 ? round(($result_info->yes_ans / $total_questions) * 100, 2) : 0;
                                    @endphp
                                    <div class="score-display">
                                        <div class="score-circle mx-auto mb-2 position-relative" 
                                             style="width: 80px; height: 80px; border-radius: 50%; background: conic-gradient(#2B3990 {{$percentage}}%, #e9ecef 0%);">
                                            <div class="position-absolute top-50 start-50 translate-middle text-center">
                                                <h6 class="mb-0 fw-bold" style="color: #2B3990; font-size: 14px;">{{ $percentage }}%</h6>
                                                <small class="text-muted" style="font-size: 10px;">Score</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Results in compact grid -->
                            <div class="row g-3 mb-4">
                                <div class="col-4">
                                    <div class="text-center p-3 rounded" style="background: linear-gradient(135deg, #28a745, #20c997); color: white;">
                                        <i class="fas fa-check-circle mb-2"></i>
                                        <h5 class="mb-1 fw-bold">{{ $result_info->yes_ans }}</h5>
                                        <small style="font-size: 11px;">Correct</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-center p-3 rounded" style="background: linear-gradient(135deg, #dc3545, #e83e8c); color: white;">
                                        <i class="fas fa-times-circle mb-2"></i>
                                        <h5 class="mb-1 fw-bold">{{ $result_info->no_ans }}</h5>
                                        <small style="font-size: 11px;">Wrong</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-center p-3 rounded" style="background: linear-gradient(135deg, #2B3990, #00aeef); color: white;">
                                        <i class="fas fa-list-alt mb-2"></i>
                                        <h5 class="mb-1 fw-bold">{{ $total_questions }}</h5>
                                        <small style="font-size: 11px;">Total</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Performance Summary -->
                            <div class="performance-summary p-3 rounded mb-4" style="background: #f8fafc; border-left: 4px solid #2B3990;">
                                <div class="row text-center">
                                    <div class="col-6 border-end">
                                        <small class="text-muted d-block">Accuracy Rate</small>
                                        <strong class="text-primary" style="font-size: 18px;">{{ $percentage }}%</strong>
                                    </div>
                                    <div class="col-6">
                                        <small class="text-muted d-block">Success Ratio</small>
                                        <strong class="text-primary" style="font-size: 18px;">{{ $result_info->yes_ans }}/{{ $total_questions }}</strong>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="action-buttons mt-4 pt-3 border-top">
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <a href="{{ url('student/dashboard') }}" class="btn btn-outline-primary btn-block py-2" style="border-radius: 8px; border: 2px solid #2B3990; color: #2B3990;">
                                            <i class="fas fa-arrow-left mr-2"></i>Back
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-block py-2 download-btn" style="background: #2B3990; color: white; border-radius: 8px; border: none;">
                                            <i class="fas fa-download mr-2"></i>Download
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
    .card {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border: 1px solid rgba(43, 57, 144, 0.1);
    }
    
    .card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 20px rgba(43, 57, 144, 0.12) !important;
    }
    
    .student-avatar {
        transition: all 0.3s ease;
        border: 2px solid rgba(255,255,255,0.3);
    }
    
    .student-avatar:hover {
        transform: scale(1.05);
        border-color: rgba(255,255,255,0.6);
    }
    
    .score-circle {
        transition: all 0.3s ease;
        position: relative;
    }
    
    .score-circle:hover {
        transform: scale(1.05);
    }
    
    .score-circle::before {
        content: '';
        position: absolute;
        top: -3px;
        left: -3px;
        right: -3px;
        bottom: -3px;
        border-radius: 50%;
        background: conic-gradient(#2B3990 {{$percentage}}%, transparent 0%);
        z-index: -1;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .score-circle:hover::before {
        opacity: 0.3;
    }
    
    .download-btn {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        background: #2B3990 !important;
        position: relative;
        overflow: hidden;
    }
    
    .download-btn:hover {
        background: #1a237e !important;
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(43, 57, 144, 0.3);
    }
    
    .download-btn:active {
        transform: translateY(0);
    }
    
    .performance-summary {
        transition: all 0.3s ease;
    }
    
    .performance-summary:hover {
        background: #e3f2fd !important;
        transform: translateX(2px);
    }
    
    /* Smooth animations for result cards */
    .col-4 > div {
        transition: all 0.3s ease;
    }
    
    .col-4 > div:hover {
        transform: translateY(-3px) scale(1.02);
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    
    /* Compact responsive adjustments */
    @media (max-width: 768px) {
        .card-body {
            padding: 1.5rem !important;
        }
        
        .score-circle {
            width: 60px !important;
            height: 60px !important;
        }
        
        .col-4 > div {
            padding: 1rem 0.5rem !important;
        }
        
        .col-4 h5 {
            font-size: 1.1rem !important;
        }
    }
    
    @media (max-width: 576px) {
        .card-header .d-flex {
            flex-direction: column;
            align-items: flex-start !important;
        }
        
        .student-avatar {
            margin-bottom: 10px;
        }
        
        .badge {
            margin-top: 10px;
            align-self: flex-start !important;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Download button functionality
        document.querySelector('.download-btn').addEventListener('click', function() {
            // Add download animation
            const btn = this;
            const originalHtml = btn.innerHTML;
            
            btn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Downloading...';
            btn.disabled = true;
            
            setTimeout(() => {
                // Simulate download completion
                window.print();
                
                setTimeout(() => {
                    btn.innerHTML = originalHtml;
                    btn.disabled = false;
                }, 1000);
            }, 1500);
        });
        
        // Add smooth entrance animations
        const elements = document.querySelectorAll('.card, .col-4 > div, .performance-summary');
        elements.forEach((el, index) => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                el.style.transition = 'all 0.5s ease';
                el.style.opacity = '1';
                el.style.transform = 'translateY(0)';
            }, index * 100);
        });
    });
</script>

@endsection --}}





















{{-- 
@extends('layouts.student')
@section('title','Result Card')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12">
                        <!-- Result Card -->
                        <div class="card result-card shadow-lg border-0 mt-4">
                            <!-- Header Section -->
                            <div class="card-header text-center py-4" style="background: linear-gradient(135deg, #1a237e 0%, #283593 100%); border: none;">
                                <div class="row align-items-center">
                                    <div class="col-md-2 text-left">
                                        <div class="logo-placeholder bg-white rounded p-2 d-inline-block">
                                            <span style="color: #1a237e; font-weight: bold; font-size: 12px;">NTS</span>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h4 class="text-white mb-1" style="font-weight: 700;">NATIONAL TESTING SERVICE - PAKISTAN</h4>
                                        <p class="text-white-50 mb-0" style="font-size: 14px;">GRADUATE ASSESSMENT TEST (GAT) - GENERAL</p>
                                        <small class="text-white-50">URL: www.nts.org.pk</small>
                                    </div>
                                    <div class="col-md-2 text-right">
                                        <div class="qr-placeholder bg-white rounded p-1 d-inline-block">
                                            <small class="text-muted">QR Code</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Result Title -->
                            <div class="text-center py-3 border-bottom" style="background: #f8f9fa;">
                                <h3 class="mb-0" style="color: #d32f2f; font-weight: 800; font-size: 24px;">RESULT CARD</h3>
                            </div>

                            <div class="card-body p-4">
                                <!-- Personal Information -->
                                <div class="personal-info mb-4">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <table class="table table-sm table-borderless">
                                                <tr>
                                                    <td style="width: 35%; color: #666; font-weight: 600;">Roll No</td>
                                                    <td style="font-weight: 600; color: #1a237e;">22630-100163</td>
                                                </tr>
                                                <tr>
                                                    <td style="color: #666; font-weight: 600;">Full Name</td>
                                                    <td style="font-weight: 600;">Kashif Latif</td>
                                                </tr>
                                                <tr>
                                                    <td style="color: #666; font-weight: 600;">Father Name</td>
                                                    <td>Latif Hussain</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <table class="table table-sm table-borderless">
                                                <tr>
                                                    <td style="width: 40%; color: #666; font-weight: 600;">CNIC #</td>
                                                    <td style="font-weight: 600; color: #1a237e;">36302-6524636-9</td>
                                                </tr>
                                                <tr>
                                                    <td style="color: #666; font-weight: 600;">Valid Upto</td>
                                                    <td style="color: #d32f2f; font-weight: 600;">19th November, 2024</td>
                                                </tr>
                                                <tr>
                                                    <td style="color: #666; font-weight: 600;">Test Date</td>
                                                    <td>Sunday 20th November, 2022</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!-- Score Section -->
                                <div class="score-section mb-4">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="text-center p-3 rounded border" style="background: linear-gradient(135deg, #1a237e, #3949ab); color: white;">
                                                <h5 class="mb-1" style="font-weight: 300;">Test Score</h5>
                                                <h1 class="mb-0" style="font-weight: 800; font-size: 42px;">52</h1>
                                                <small>Out of 100</small>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="score-details p-3 border rounded">
                                                <h6 class="text-center mb-3" style="color: #1a237e; font-weight: 700;">DETAILED SCORE BREAKDOWN</h6>
                                                <table class="table table-bordered table-sm mb-0">
                                                    <thead style="background: #e3f2fd;">
                                                        <tr>
                                                            <th>Test Type</th>
                                                            <th>English</th>
                                                            <th>Analytical</th>
                                                            <th>Quantitative</th>
                                                            <th>Accumulative</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="font-weight: 600; color: #1a237e;">Engineering & Technology</td>
                                                            <td class="text-center">24</td>
                                                            <td class="text-center">12</td>
                                                            <td class="text-center">16</td>
                                                            <td class="text-center" style="font-weight: 700; color: #1a237e;">52</td>
                                                        </tr>
                                                        <tr style="background: #f8f9fa;">
                                                            <td style="font-weight: 600; color: #d32f2f;">* Percentile Score</td>
                                                            <td class="text-center" style="color: #d32f2f;">66.73</td>
                                                            <td class="text-center" style="color: #d32f2f;">41.43</td>
                                                            <td class="text-center" style="color: #d32f2f;">64.07</td>
                                                            <td class="text-center" style="font-weight: 700; color: #d32f2f;">57.93</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Verification & Contact Info -->
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="verification-section text-center p-3 border rounded">
                                            <h6 style="color: #1a237e; font-weight: 700; margin-bottom: 15px;">Scan for Verification:</h6>
                                            <div class="qr-code-placeholder bg-light border rounded p-3 mx-auto d-inline-block">
                                                <small class="text-muted">QR Code Image</small>
                                            </div>
                                            <div class="mt-2">
                                                <small class="text-muted">https://pedag.nts.org.pk/NTS/CT_resilicate/SNS-NT-SLH</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="contact-info p-3 border rounded">
                                            <h6 style="color: #1a237e; font-weight: 700; margin-bottom: 15px;">Contact Info:</h6>
                                            <table class="table table-sm table-borderless">
                                                <tr>
                                                    <td style="width: 30%; color: #666;">Full Name:</td>
                                                    <td style="font-weight: 600;">Kashif Latif</td>
                                                </tr>
                                                <tr>
                                                    <td style="color: #666;">Phone:</td>
                                                    <td>3305693700</td>
                                                </tr>
                                                <tr>
                                                    <td style="color: #666;">CNIC:</td>
                                                    <td>36302-6524636-9</td>
                                                </tr>
                                                <tr>
                                                    <td style="color: #666; vertical-align: top;">Address:</td>
                                                    <td>370/C Shah Rukne Alam Colony, Multan.</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!-- Note Section -->
                                <div class="note-section mt-4 p-3 border rounded" style="background: #fff3e0; border-left: 4px solid #ff9800 !important;">
                                    <h6 style="color: #e65100; font-weight: 700; margin-bottom: 10px;">Note:</h6>
                                    <p class="mb-2" style="font-size: 13px; color: #555;">
                                        The result card will remain valid for two years from the date of the test.
                                    </p>
                                    <p class="mb-0" style="font-size: 13px; color: #555;">
                                        *The percentile score is subjected to change after each GAT-General Test conducted during the validity period of this result.
                                    </p>
                                </div>

                                <!-- Action Buttons -->
                                <div class="action-buttons mt-4 pt-3 border-top">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <a href="{{ url('student/dashboard') }}" class="btn btn-outline-primary btn-block py-2">
                                                <i class="fas fa-arrow-left mr-2"></i>Back to Dashboard
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <button class="btn btn-primary btn-block py-2" style="background: #1a237e; border: none;">
                                                <i class="fas fa-download mr-2"></i>Download Result Card
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<style>
    .result-card {
        border-radius: 8px;
        overflow: hidden;
        background: #ffffff;
    }

    .card-header {
        border-bottom: 3px solid #d32f2f;
    }

    .logo-placeholder, .qr-placeholder {
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .table-sm td {
        padding: 0.4rem 0.5rem;
        border: none;
    }

    .table-bordered {
        border: 1px solid #dee2e6;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6;
        padding: 0.5rem;
    }

    .score-details .table th {
        background: #1a237e;
        color: white;
        border: none;
        font-weight: 600;
        text-align: center;
    }

    .verification-section .qr-code-placeholder {
        width: 120px;
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .contact-info {
        background: #f8f9fa;
    }

    .note-section {
        border-color: #ff9800 !important;
    }

    /* Print Styles */
    @media print {
        .action-buttons {
            display: none !important;
        }
        
        .result-card {
            box-shadow: none !important;
            border: 1px solid #ccc !important;
        }
        
        body {
            background: white !important;
        }
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .card-header .row {
            text-align: center;
        }
        
        .card-header .col-md-2 {
            text-align: center !important;
            margin-bottom: 10px;
        }
        
        .score-section .row {
            flex-direction: column;
        }
        
        .score-section .col-md-4 {
            margin-bottom: 20px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Print functionality
        document.querySelector('.btn-primary').addEventListener('click', function() {
            window.print();
        });
        
        // Add some interactive effects
        const scoreCards = document.querySelectorAll('.col-md-4 > div, .score-details, .verification-section, .contact-info');
        scoreCards.forEach(card => {
            card.style.transition = 'all 0.3s ease';
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
                this.style.boxShadow = '0 4px 12px rgba(0,0,0,0.1)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = 'none';
            });
        });
    });
</script>

@endsection --}}

































{{-- @extends('layouts.student')
@section('title','Result')
@section('content')

  
  <div class="content-wrapper">
  
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Result</h1>
          </div>=
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Exam</li>
            </ol>
          </div>
        </div>
      </div>

      <section class="content">
        <div class="container-fluid">
          <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">

                <div class="card mt-4">
                    
                    <div class="card-body">
                        <h2>Student information</h2>
                        <table class="table">
                            <tr>
                                <td>Name : </td>
                                <td>{{ $student_info->name}}</td>
                            </tr>
                            <tr>
                                <td>E-mail : </td>
                                <td>{{ $student_info->email}}</td>
                            </tr>
                        
                            <tr>
                                <td>Exam name : </td>
                                <td>{{ $exam_info->title}}</td>
                            </tr>
                            <tr>
                                <td>Exam date : </td>
                                <td>{{ $exam_info->exam_date}}</td>
                            </tr>
                        </table>
                        <h2>Result info</h2>
                        <table class="table">
                            <tr>
                                <td>Correst ans : </td>
                                <td>{{ $result_info->yes_ans}}</td>
                            </tr>
                            <tr>
                                <td>Wrong ans : </td>
                                <td>{{ $result_info->no_ans}}</td>
                            </tr>
                            <tr>
                                <td>Total : </td>
                                <td>{{ $result_info->yes_ans+$result_info->no_ans}}</td>
                            </tr>
                        </table>
                    </div>
                   
                </div>
                </div>
          </div>
        </div>
      </section>
    </div>
   
@endsection --}}






























@extends('layouts.student')
@section('title','Result')
@section('content')

    <!-- /.content-header -->
     <!-- Content Wrapper. Contains page content -->
  <div class="">
    <!-- Content Header (Page header) -->
    <div class="content-wrapper">
      <div class="container-fluid p-3" style="background: white;">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="color: #2B3990; font-weight: 600;">Exam Result</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right bg-white my-0">
              <li class="breadcrumb-item"><a href="#" style="color: #2B3990;">Home</a></li>
              <li class="breadcrumb-item active">Result</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

      <section class="content">
        <div class="container-fluid">
          <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">

                <!-- Result Card -->
                <div class="card mt-4 shadow-lg border-0" style="border-radius: 15px; overflow: hidden;">
                    <!-- Card Header -->
                    <div class="card-header py-3" style="background: linear-gradient(135deg, #2B3990 0%, #1a237e 100%); border: none;">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="mb-0 text-white" style="font-weight: 600;">
                                <i class="fas fa-trophy mr-2"></i>Exam Results
                            </h4>
                            <span class="badge badge-light px-3 py-2" style="font-size: 14px; background: rgba(255,255,255,0.9); color: #2B3990;">
                                <i class="fas fa-calendar-alt mr-1"></i> {{ \Carbon\Carbon::parse($exam_info->exam_date)->format('M d, Y') }}
                            </span>
                        </div>
                    </div>
                    
                    <div class="card-body p-4">
                        <!-- Student Information Section -->
                        <div class="info-section mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="mb-0" style="color: #2B3990; font-weight: 600;">
                                    <i class="fas fa-user-graduate mr-2"></i>Student Information
                                </h5>
                                <div class="student-avatar bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" 
                                     style="width: 50px; height: 50px; background: #2B3990 !important; font-size: 18px; font-weight: 600;">
                                    {{ substr($student_info->name, 0, 1) }}
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="info-item p-3 mb-3 rounded" style="background: #f8f9fa; border-left: 4px solid #2B3990;">
                                        <small class="text-muted d-block">Full Name</small>
                                        <strong class="text-dark">{{ $student_info->name }}</strong>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-item p-3 mb-3 rounded" style="background: #f8f9fa; border-left: 4px solid #2B3990;">
                                        <small class="text-muted d-block">Email Address</small>
                                        <strong class="text-dark">{{ $student_info->email }}</strong>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-item p-3 mb-3 rounded" style="background: #f8f9fa; border-left: 4px solid #2B3990;">
                                        <small class="text-muted d-block">Exam Name</small>
                                        <strong class="text-dark">{{ $exam_info->title }}</strong>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-item p-3 mb-3 rounded" style="background: #f8f9fa; border-left: 4px solid #2B3990;">
                                        <small class="text-muted d-block">Exam Date</small>
                                        <strong class="text-dark">{{ \Carbon\Carbon::parse($exam_info->exam_date)->format('F d, Y') }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Result Information Section -->
                        <div class="result-section">
                            <h5 class="mb-4" style="color: #2B3990; font-weight: 600;">
                                <i class="fas fa-chart-bar mr-2"></i>Performance Summary
                            </h5>
                            
                            <div class="row">
                                <!-- Correct Answers -->
                                <div class="col-md-4 mb-4">
                                    <div class="text-center p-4 rounded" style="background: linear-gradient(135deg, #28a745, #20c997); color: white;">
                                        <div class="result-icon mb-2">
                                            <i class="fas fa-check-circle fa-2x"></i>
                                        </div>
                                        <h3 class="mb-1" style="font-weight: 700;">{{ $result_info->yes_ans }}</h3>
                                        <small>Correct Answers</small>
                                    </div>
                                </div>
                                
                                <!-- Wrong Answers -->
                                <div class="col-md-4 mb-4">
                                    <div class="text-center p-4 rounded" style="background: linear-gradient(135deg, #dc3545, #e83e8c); color: white;">
                                        <div class="result-icon mb-2">
                                            <i class="fas fa-times-circle fa-2x"></i>
                                        </div>
                                        <h3 class="mb-1" style="font-weight: 700;">{{ $result_info->no_ans }}</h3>
                                        <small>Wrong Answers</small>
                                    </div>
                                </div>
                                
                                <!-- Total Questions -->
                                <div class="col-md-4 mb-4">
                                    <div class="text-center p-4 rounded" style="background: linear-gradient(135deg, #2B3990, #00aeef); color: white;">
                                        <div class="result-icon mb-2">
                                            <i class="fas fa-list-alt fa-2x"></i>
                                        </div>
                                        <h3 class="mb-1" style="font-weight: 700;">{{ $result_info->yes_ans + $result_info->no_ans }}</h3>
                                        <small>Total Questions</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Score Percentage -->
                            @php
                                $total_questions = $result_info->yes_ans + $result_info->no_ans;
                                $percentage = $total_questions > 0 ? round(($result_info->yes_ans / $total_questions) * 100, 2) : 0;
                            @endphp
                            
                            <div class="score-card p-4 rounded mb-4" style="background: #f8f9fa; border: 2px dashed #2B3990;">
                                <div class="text-center">
                                    <h4 class="mb-2" style="color: #2B3990; font-weight: 600;">Overall Score</h4>
                                    <div class="score-circle mx-auto mb-3 d-flex align-items-center justify-content-center" 
                                         style="width: 120px; height: 120px; border-radius: 50%; background: conic-gradient(#2B3990 {{$percentage}}%, #e9ecef 0%); position: relative;">
                                        <div class="score-inner bg-white rounded-circle d-flex align-items-center justify-content-center" 
                                             style="width: 100px; height: 100px;">
                                            <div class="text-center">
                                                <h3 class="mb-0" style="color: #2B3990; font-weight: 700;">{{ $percentage }}%</h3>
                                                <small class="text-muted">Score</small>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mb-0">
                                        {{ $result_info->yes_ans }} out of {{ $total_questions }} questions answered correctly
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="action-buttons mt-4 pt-3 border-top">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <a href="{{ url('student/dashboard') }}" class="btn btn-outline-primary btn-lg btn-block py-2" style="border-radius: 8px; border: 2px solid #2B3990; color: #2B3990;">
                                        <i class="fas fa-arrow-left mr-2"></i>Back to Dashboard
                                    </a>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <button class="btn btn-lg btn-block py-2 download-btn" style="background: #2B3990; color: white; border-radius: 8px; border: none;">
                                        <i class="fas fa-download mr-2"></i>Download Result
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                </div>
          </div>
        </div>
      </section>
    </div>
    <!-- /.content-header -->

    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(43, 57, 144, 0.15) !important;
        }
        
        .info-item {
            transition: all 0.3s ease;
        }
        
        .info-item:hover {
            transform: translateX(5px);
            background: #e3f2fd !important;
        }
        
        .result-icon {
            transition: transform 0.3s ease;
        }
        
        .result-icon:hover {
            transform: scale(1.1);
        }
        
        .download-btn {
            transition: all 0.3s ease;
            background: #2B3990 !important;
        }
        
        .download-btn:hover {
            background: #1a237e !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(43, 57, 144, 0.3);
        }
        
        .score-circle {
            transition: transform 0.3s ease;
        }
        
        .score-circle:hover {
            transform: scale(1.05);
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Download button functionality
            document.querySelector('.download-btn').addEventListener('click', function() {
                // You can implement PDF generation or print functionality here
                window.print();
                
                // Or for PDF download:
                // generatePDF();
            });
            
            // Add some animation on load
            const cards = document.querySelectorAll('.info-item, .result-icon');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    card.style.transition = 'all 0.5s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
        
        function generatePDF() {
            // Implement PDF generation using jsPDF or similar library
            alert('PDF download functionality would be implemented here!');
        }
    </script>
 
@endsection