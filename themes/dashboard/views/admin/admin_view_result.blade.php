@extends('layouts.app')
@section('title','Result')
@section('content')

<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="color: #2B3990; font-weight: 600;">Exam Result</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" style="color: #2B3990;">Home</a></li>
                        <li class="breadcrumb-item active">Result</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <!-- Result Card -->
                    <div class="card result-card shadow-lg border-0 mt-4">
                        <!-- Card Header -->
                        <div class="card-header py-4" style="background: linear-gradient(135deg, #2B3990 0%, #1a237e 100%); border: none;">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="text-white mb-1" style="font-weight: 700;">
                                        <i class="fas fa-graduation-cap mr-2"></i>Exam Result Summary
                                    </h4>
                                    <p class="text-white-50 mb-0">Detailed performance report</p>
                                </div>
                                <div class="col-md-4 text-right">
                                    <span class="badge badge-light px-3 py-2" style="font-size: 14px; background: rgba(255,255,255,0.9); color: #2B3990;">
                                        <i class="fas fa-calendar-alt mr-1"></i> 
                                        {{ \Carbon\Carbon::parse($exam_info->exam_date)->format('M d, Y') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card-body p-4">
                            <!-- Student Information -->
                            <div class="student-info-section mb-5">
                                <div class="section-header mb-4">
                                    <h5 style="color: #2B3990; font-weight: 600; border-bottom: 2px solid #2B3990; padding-bottom: 8px;">
                                        <i class="fas fa-user-graduate mr-2"></i>Student Information
                                    </h5>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="info-card p-4 rounded" style="background: #f8f9fa; border-left: 4px solid #2B3990;">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="student-avatar bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mr-3" 
                                                     style="width: 50px; height: 50px; background: #2B3990 !important; font-size: 18px; font-weight: 600;">
                                                    {{ substr($student_info->name, 0, 1) }}
                                                </div>
                                                <div>
                                                    <h6 class="mb-0" style="color: #2B3990; font-weight: 600;">{{ $student_info->name }}</h6>
                                                    <small class="text-muted">Student</small>
                                                </div>
                                            </div>
                                            <table class="table table-sm table-borderless mb-0">
                                                <tr>
                                                    <td style="width: 40%; color: #666; font-weight: 500;">Email:</td>
                                                    <td style="font-weight: 500;">{{ $student_info->email }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 mb-4">
                                        <div class="info-card p-4 rounded" style="background: #f8f9fa; border-left: 4px solid #00aeef;">
                                            <h6 style="color: #2B3990; font-weight: 600; margin-bottom: 15px;">
                                                <i class="fas fa-file-alt mr-2"></i>Exam Details
                                            </h6>
                                            <table class="table table-sm table-borderless mb-0">
                                                <tr>
                                                    <td style="width: 40%; color: #666; font-weight: 500;">Exam Name:</td>
                                                    <td style="font-weight: 500;">{{ $exam_info->title }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="color: #666; font-weight: 500;">Exam Date:</td>
                                                    <td>{{ \Carbon\Carbon::parse($exam_info->exam_date)->format('F d, Y') }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Result Information -->
                            <div class="result-info-section">
                                <div class="section-header mb-4">
                                    <h5 style="color: #2B3990; font-weight: 600; border-bottom: 2px solid #2B3990; padding-bottom: 8px;">
                                        <i class="fas fa-chart-bar mr-2"></i>Performance Results
                                    </h5>
                                </div>
                                
                                <!-- Score Cards -->
                                <div class="row mb-4">
                                    <div class="col-md-4 mb-3">
                                        <div class="text-center p-4 rounded shadow-sm" style="background: linear-gradient(135deg, #28a745, #20c997); color: white;">
                                            <div class="score-icon mb-3">
                                                <i class="fas fa-check-circle fa-2x"></i>
                                            </div>
                                            <h2 class="mb-2" style="font-weight: 800;">{{ $result_info->yes_ans }}</h2>
                                            <h6 class="mb-0">Correct Answers</h6>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4 mb-3">
                                        <div class="text-center p-4 rounded shadow-sm" style="background: linear-gradient(135deg, #dc3545, #e83e8c); color: white;">
                                            <div class="score-icon mb-3">
                                                <i class="fas fa-times-circle fa-2x"></i>
                                            </div>
                                            <h2 class="mb-2" style="font-weight: 800;">{{ $result_info->no_ans }}</h2>
                                            <h6 class="mb-0">Wrong Answers</h6>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4 mb-3">
                                        <div class="text-center p-4 rounded shadow-sm" style="background: linear-gradient(135deg, #2B3990, #00aeef); color: white;">
                                            <div class="score-icon mb-3">
                                                <i class="fas fa-list-alt fa-2x"></i>
                                            </div>
                                            <h2 class="mb-2" style="font-weight: 800;">{{ $result_info->yes_ans + $result_info->no_ans }}</h2>
                                            <h6 class="mb-0">Total Questions</h6>
                                        </div>
                                    </div>
                                </div>

                                <!-- Performance Summary -->
                                @php
                                    $total_questions = $result_info->yes_ans + $result_info->no_ans;
                                    $percentage = $total_questions > 0 ? round(($result_info->yes_ans / $total_questions) * 100, 2) : 0;
                                    $score_color = $percentage >= 70 ? '#28a745' : ($percentage >= 50 ? '#ffc107' : '#dc3545');
                                @endphp
                                
                                <div class="performance-summary p-4 rounded mb-4" style="background: linear-gradient(135deg, #f8f9fa, #e9ecef); border: 2px solid #e9ecef;">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <h5 style="color: #2B3990; font-weight: 600; margin-bottom: 15px;">Overall Performance</h5>
                                            <div class="performance-stats">
                                                <div class="d-flex justify-content-between mb-2">
                                                    <span style="color: #666;">Accuracy Rate:</span>
                                                    <strong style="color: {{ $score_color }}; font-size: 18px;">{{ $percentage }}%</strong>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <span style="color: #666;">Success Ratio:</span>
                                                    <strong style="color: #2B3990; font-size: 18px;">{{ $result_info->yes_ans }}/{{ $total_questions }}</strong>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <span style="color: #666;">Performance:</span>
                                                    <strong style="color: {{ $score_color }}; font-size: 18px;">
                                                        @if($percentage >= 70) Excellent
                                                        @elseif($percentage >= 50) Good
                                                        @else Needs Improvement
                                                        @endif
                                                    </strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <div class="score-circle mx-auto position-relative" 
                                                 style="width: 120px; height: 120px; border-radius: 50%; background: conic-gradient({{ $score_color }} {{$percentage}}%, #e9ecef 0%);">
                                                <div class="position-absolute top-50 start-50 translate-middle text-center">
                                                    <h4 class="mb-0 fw-bold" style="color: {{ $score_color }};">{{ $percentage }}%</h4>
                                                    <small class="text-muted">Score</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="action-buttons mt-5 pt-4 border-top">
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <a href="{{ url('student/dashboard') }}" class="btn btn-outline-primary btn-lg btn-block py-3" 
                                           style="border-radius: 10px; border: 2px solid #2B3990; color: #2B3990; font-weight: 600;">
                                            <i class="fas fa-arrow-left mr-2"></i>Back to Dashboard
                                        </a>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <button class="btn btn-primary btn-lg btn-block py-3 download-btn" 
                                                style="background: #2B3990; color: white; border-radius: 10px; border: none; font-weight: 600;">
                                            <i class="fas fa-download mr-2"></i>Download Result
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
    .result-card {
        border-radius: 15px;
        overflow: hidden;
        background: #ffffff;
        transition: all 0.3s ease;
    }
    
    .result-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(43, 57, 144, 0.15) !important;
    }
    
    .info-card {
        transition: all 0.3s ease;
        height: 100%;
    }
    
    .info-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .student-avatar {
        transition: all 0.3s ease;
        border: 2px solid rgba(255,255,255,0.3);
    }
    
    .student-avatar:hover {
        transform: scale(1.05);
        border-color: rgba(255,255,255,0.6);
    }
    
    .score-icon {
        transition: transform 0.3s ease;
    }
    
    .col-md-4 > div:hover .score-icon {
        transform: scale(1.1);
    }
    
    .score-circle {
        transition: all 0.3s ease;
    }
    
    .score-circle:hover {
        transform: scale(1.05);
    }
    
    .download-btn {
        transition: all 0.3s ease;
        background: #2B3990 !important;
        position: relative;
        overflow: hidden;
    }
    
    .download-btn:hover {
        background: #1a237e !important;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(43, 57, 144, 0.3);
    }
    
    .section-header h5 {
        position: relative;
    }
    
    .section-header h5::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 50px;
        height: 3px;
        background: #00aeef;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .card-body {
            padding: 1.5rem !important;
        }
        
        .score-circle {
            width: 100px !important;
            height: 100px !important;
        }
        
        .col-md-4 > div {
            margin-bottom: 15px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Download button functionality
        document.querySelector('.download-btn').addEventListener('click', function() {
            const btn = this;
            const originalHtml = btn.innerHTML;
            
            btn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Downloading...';
            btn.disabled = true;
            
            setTimeout(() => {
                // Print the result card
                window.print();
                
                setTimeout(() => {
                    btn.innerHTML = originalHtml;
                    btn.disabled = false;
                }, 1000);
            }, 1500);
        });
        
        // Add entrance animations
        const animatedElements = document.querySelectorAll('.info-card, .col-md-4 > div, .performance-summary');
        animatedElements.forEach((el, index) => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                el.style.transition = 'all 0.6s ease';
                el.style.opacity = '1';
                el.style.transform = 'translateY(0)';
            }, index * 150);
        });
    });
</script>

@endsection