
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
                                    <div class="text-center p-4 rounded" style="background: rgba(0, 174, 239); color: white;">
                                        <div class="result-icon mb-2">
                                            <i class="fas fa-check-circle fa-2x"></i>
                                        </div>
                                        <h3 class="mb-1" style="font-weight: 700;">{{ $result_info->yes_ans }}</h3>
                                        <small>Correct Answers</small>
                                    </div>
                                </div>
                                
                                <!-- Wrong Answers -->
                                <div class="col-md-4 mb-4">
                                    <div class="text-center p-4 rounded" style="background: rgba(220, 53, 69); color: white;">
                                        <div class="result-icon mb-2">
                                            <i class="fas fa-times-circle fa-2x"></i>
                                        </div>
                                        <h3 class="mb-1" style="font-weight: 700;">{{ $result_info->no_ans }}</h3>
                                        <small>Wrong Answers</small>
                                    </div>
                                </div>
                                
                                <!-- Total Questions -->
                                <div class="col-md-4 mb-4">
                                    <div class="text-center p-4 rounded" style="background: rgba(43, 57, 144); color: white;">
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