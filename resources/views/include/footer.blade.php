<footer>
    <div class="container-fluid block-padding pt-5 pb-4">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="mb-2">
                    <a id="home-footer-link" class="footer-link" href="{{route('home')}}">Home</a>
                </div>
                <div class="mb-2">
                    <a id="patient-info-footer-link" class="footer-link" href="{{route('patient-information')}}">Patient Information</a>
                </div>
                <div class="mb-2">
                    <a id="dental-services-footer-link" class="footer-link" href="{{route('dental-services')}}">Dental Services</a>
                </div>
                <div class="mb-2">
                    <a id="contact-footer-link" class="footer-link" href="{{route('contact')}}">Contact</a>
                </div>
                <div>
                    <a id="blog-footer-link" class="footer-link" href="{{route('blog')}}">Blog</a>
                </div>
            </div>
            <div class="col-lg-2 mb-4 mb-lg-0">
                <div class="fs-20 fw-bold dark-color-1 mb-2">Hours</div>
                <div class="fs-16 dark-color-1 mb-1">
                    <span class="fw-bold">Monday:</span> 9am-6pm
                </div>
                <div class="fs-16 dark-color-1 mb-1">
                    <span class="fw-bold">Tuesday:</span> 9am-6pm
                </div>
                <div class="fs-16 dark-color-1 mb-1">
                    <span class="fw-bold">Wednesday:</span> Closed
                </div>
                <div class="fs-16 dark-color-1 mb-1">
                    <span class="fw-bold">Thursday:</span> 9am-6pm
                </div>
                <div class="fs-16 dark-color-1 mb-1">
                    <span class="fw-bold">Friday:</span> 9am-4pm
                </div>
                <div class="fs-16 dark-color-1">
                    <span class="fw-bold">Saturday:</span> 8am-2pm
                </div>
            </div>
            <div class="offset-lg-1 col-lg-3 mb-4 mb-lg-0">
                <div class="fs-20 fw-bold dark-color-1 mb-2">About us</div>
                <div class="fs-16 dark-color-1">
                In addition to our advanced technologies & innovative techniques, we've revolutionized dentistry to
                be truly personalized & convenient. No more 9-5! We have hours that fit your busy schedule, including evenings
                & Saturdays. Plus, we take the time to listen & clearly explain everything you need to know about your care.
                </div>
            </div>
            <div class="col-lg-2 mb-4 mb-lg-0">
                <div class="text-start text-lg-end">
                    <div class="fs-20 fw-bold dark-color-1 mb-3">Address & Phone</div>
                    <div class="fs-16 dark-color-1 mb-0">4224 E 10 Mile Rd,</div>
                    <div class="fs-16 dark-color-1 mb-0">Warren, MI 48091,</div>
                    <div class="fs-16 dark-color-1 mb-0">United States</div>
                    <div class="my-4">
                        <a href="tel:+586-756-6351" class="text-decoration-none fs-16 dark-color-1">586-756-6351</a>
                    </div>
                    <div>
                    <a href="{{route('contact')}}" class="btn-main-blue ms-0 ms-lg-auto w-fit">Book a visit</a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-lg-5 my-2">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="h-100 d-flex align-items-center">
                    <div class="fs-16 gray-color-1">
                    © <span id="current-date"></span> Warren Laser Dentistry All rights reserved
                    <a href="{{route('privacy-policy')}}" class="gray-color-1 text-decoration-underline">Privacy Policy</a> |
                    <a href="{{route('terms-and-conditions')}}" class="gray-color-1 text-decoration-underline">Terms and Conditions</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                <div class="text-start text-lg-end">
                    <a class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Visit us on Facebook" href="{{env('FACEBOOK_LINK')}}" target="_blank" rel="noopener noreferrer" aria-label="Warren facebook">
                        <svg class="hov-shadow rounded-circle" width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="62" height="62" rx="31" fill="white"/>
                            <path d="M33.5 32.875H36.625L37.875 27.875H33.5V25.375C33.5 24.0875 33.5 22.875 36 22.875H37.875V18.675C37.4675 18.6213 35.9287 18.5 34.3037 18.5C30.91 18.5 28.5 20.5712 28.5 24.375V27.875H24.75V32.875H28.5V43.5H33.5V32.875Z" fill="#05395B"/>
                        </svg>
                    </a>
                    <a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Check our YouTube videos" href="{{env('YOUTUBE_LINK')}}" target="_blank" rel="noopener noreferrer" aria-label="Warren youtube">
                        <svg class="hov-shadow rounded-circle" width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="62" height="62" rx="31" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M43.125 26.0462C43.008 25.158 42.6688 24.3136 42.1387 23.5912C41.4819 22.9295 40.5911 22.5528 39.6587 22.5425C36.2 22.2925 31.0013 22.2925 31.0013 22.2925C31.0013 22.2925 25.805 22.2925 22.3412 22.5425C21.4094 22.5532 20.5191 22.9298 19.8625 23.5912C19.3289 24.3122 18.9889 25.1578 18.875 26.0475C18.7202 27.3779 18.6367 28.7156 18.625 30.055V31.93C18.6367 33.2693 18.7202 34.6071 18.875 35.9375C18.9925 36.8275 19.33 37.675 19.855 38.4025C20.61 39.0725 21.58 39.4487 22.5887 39.4625C24.5675 39.6512 31.0025 39.7125 31.0025 39.7125C31.0025 39.7125 36.2038 39.7125 39.6625 39.4625C40.5954 39.4521 41.4868 39.0749 42.1438 38.4125C42.6712 37.6885 43.0094 36.8442 43.1275 35.9562C43.2823 34.6258 43.3658 33.2881 43.3775 31.9487V30.0537C43.3626 28.7144 43.2784 27.3768 43.125 26.0462ZM28.51 34.2387V27.2137L35.26 30.7375L28.51 34.2387Z" fill="#05395B"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="chat-icon" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Call us now!">
    <a href="tel:+1-586-756-6351" aria-label="Warren - Phone call">
        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5211 2.89855C9.21992 2.89855 7.01297 3.8127 5.38577 5.4399C3.75857 7.0671 2.84442 9.27405 2.84442 11.5753C2.84442 12.9645 3.17085 14.2758 3.74961 15.438C3.98224 15.9052 4.07135 16.4624 3.92502 17.0111L3.36596 19.0982C3.34249 19.1856 3.34244 19.2777 3.36582 19.3652C3.3892 19.4527 3.43518 19.5324 3.49916 19.5965C3.56313 19.6606 3.64283 19.7067 3.73026 19.7302C3.81769 19.7537 3.90977 19.7538 3.99725 19.7304L6.08622 19.1714C6.61413 19.0363 7.17321 19.0986 7.65835 19.3468C8.85826 19.9441 10.1807 20.254 11.5211 20.252C13.8223 20.252 16.0293 19.3378 17.6565 17.7106C19.2837 16.0834 20.1978 13.8765 20.1978 11.5753C20.1978 9.27405 19.2837 7.0671 17.6565 5.4399C16.0293 3.8127 13.8223 2.89855 11.5211 2.89855ZM1.43739 11.5753C1.43739 6.00622 5.95209 1.49152 11.5211 1.49152C17.0902 1.49152 21.6049 6.00622 21.6049 11.5753C21.6049 17.1443 17.0902 21.659 11.5211 21.659C9.9096 21.659 8.38438 21.28 7.03081 20.6065C6.85254 20.5116 6.64577 20.4849 6.44924 20.5315L4.3612 21.0896C2.93166 21.4723 1.62405 20.1647 2.00676 18.7352L2.56583 16.6471C2.61239 16.4506 2.58571 16.2438 2.49078 16.0656C1.79614 14.6708 1.4355 13.1335 1.43739 11.5753ZM11.5211 7.11965C11.7077 7.11965 11.8867 7.19377 12.0186 7.32571C12.1505 7.45764 12.2246 7.63658 12.2246 7.82317V15.3273C12.2246 15.5139 12.1505 15.6929 12.0186 15.8248C11.8867 15.9567 11.7077 16.0309 11.5211 16.0309C11.3345 16.0309 11.1556 15.9567 11.0237 15.8248C10.8917 15.6929 10.8176 15.5139 10.8176 15.3273V7.82317C10.8176 7.63658 10.8917 7.45764 11.0237 7.32571C11.1556 7.19377 11.3345 7.11965 11.5211 7.11965ZM7.76904 8.9957C7.95562 8.9957 8.13456 9.06982 8.2665 9.20175C8.39843 9.33369 8.47255 9.51263 8.47255 9.69921V13.4513C8.47255 13.6379 8.39843 13.8168 8.2665 13.9488C8.13456 14.0807 7.95562 14.1548 7.76904 14.1548C7.58245 14.1548 7.40351 14.0807 7.27158 13.9488C7.13964 13.8168 7.06552 13.6379 7.06552 13.4513V9.69921C7.06552 9.51263 7.13964 9.33369 7.27158 9.20175C7.40351 9.06982 7.58245 8.9957 7.76904 8.9957ZM15.2732 8.9957C15.4598 8.9957 15.6387 9.06982 15.7707 9.20175C15.9026 9.33369 15.9767 9.51263 15.9767 9.69921V13.4513C15.9767 13.6379 15.9026 13.8168 15.7707 13.9488C15.6387 14.0807 15.4598 14.1548 15.2732 14.1548C15.0866 14.1548 14.9077 14.0807 14.7758 13.9488C14.6438 13.8168 14.5697 13.6379 14.5697 13.4513V9.69921C14.5697 9.51263 14.6438 9.33369 14.7758 9.20175C14.9077 9.06982 15.0866 8.9957 15.2732 8.9957Z" fill="white"/>
        </svg>
    </a>
</div>

<div class="appointment-icon" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Book your appointment!">
    <a href="#" data-bs-toggle="modal" data-bs-target="#appointmentModal" aria-label="Warren appointment">
        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.2112 13.4814C16.46 13.4814 16.6986 13.3826 16.8745 13.2067C17.0504 13.0308 17.1492 12.7922 17.1492 12.5434C17.1492 12.2946 17.0504 12.056 16.8745 11.8801C16.6986 11.7042 16.46 11.6054 16.2112 11.6054C15.9624 11.6054 15.7238 11.7042 15.5479 11.8801C15.372 12.056 15.2732 12.2946 15.2732 12.5434C15.2732 12.7922 15.372 13.0308 15.5479 13.2067C15.7238 13.3826 15.9624 13.4814 16.2112 13.4814ZM16.2112 17.2335C16.46 17.2335 16.6986 17.1347 16.8745 16.9588C17.0504 16.7829 17.1492 16.5443 17.1492 16.2955C17.1492 16.0467 17.0504 15.8081 16.8745 15.6322C16.6986 15.4563 16.46 15.3575 16.2112 15.3575C15.9624 15.3575 15.7238 15.4563 15.5479 15.6322C15.372 15.8081 15.2732 16.0467 15.2732 16.2955C15.2732 16.5443 15.372 16.7829 15.5479 16.9588C15.7238 17.1347 15.9624 17.2335 16.2112 17.2335ZM12.4591 12.5434C12.4591 12.7922 12.3603 13.0308 12.1844 13.2067C12.0084 13.3826 11.7699 13.4814 11.5211 13.4814C11.2723 13.4814 11.0337 13.3826 10.8578 13.2067C10.6819 13.0308 10.5831 12.7922 10.5831 12.5434C10.5831 12.2946 10.6819 12.056 10.8578 11.8801C11.0337 11.7042 11.2723 11.6054 11.5211 11.6054C11.7699 11.6054 12.0084 11.7042 12.1844 11.8801C12.3603 12.056 12.4591 12.2946 12.4591 12.5434ZM12.4591 16.2955C12.4591 16.5443 12.3603 16.7829 12.1844 16.9588C12.0084 17.1347 11.7699 17.2335 11.5211 17.2335C11.2723 17.2335 11.0337 17.1347 10.8578 16.9588C10.6819 16.7829 10.5831 16.5443 10.5831 16.2955C10.5831 16.0467 10.6819 15.8081 10.8578 15.6322C11.0337 15.4563 11.2723 15.3575 11.5211 15.3575C11.7699 15.3575 12.0084 15.4563 12.1844 15.6322C12.3603 15.8081 12.4591 16.0467 12.4591 16.2955ZM6.83097 13.4814C7.07975 13.4814 7.31834 13.3826 7.49425 13.2067C7.67016 13.0308 7.76899 12.7922 7.76899 12.5434C7.76899 12.2946 7.67016 12.056 7.49425 11.8801C7.31834 11.7042 7.07975 11.6054 6.83097 11.6054C6.58219 11.6054 6.3436 11.7042 6.16768 11.8801C5.99177 12.056 5.89294 12.2946 5.89294 12.5434C5.89294 12.7922 5.99177 13.0308 6.16768 13.2067C6.3436 13.3826 6.58219 13.4814 6.83097 13.4814ZM6.83097 17.2335C7.07975 17.2335 7.31834 17.1347 7.49425 16.9588C7.67016 16.7829 7.76899 16.5443 7.76899 16.2955C7.76899 16.0467 7.67016 15.8081 7.49425 15.6322C7.31834 15.4563 7.07975 15.3575 6.83097 15.3575C6.58219 15.3575 6.3436 15.4563 6.16768 15.6322C5.99177 15.8081 5.89294 16.0467 5.89294 16.2955C5.89294 16.5443 5.99177 16.7829 6.16768 16.9588C6.3436 17.1347 6.58219 17.2335 6.83097 17.2335Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.83092 1.99066C7.01751 1.99066 7.19645 2.06478 7.32839 2.19672C7.46032 2.32865 7.53444 2.50759 7.53444 2.69418V3.40989C8.15541 3.3977 8.83923 3.3977 9.59152 3.3977H13.4496C14.2028 3.3977 14.8867 3.3977 15.5076 3.40989V2.69418C15.5076 2.50759 15.5818 2.32865 15.7137 2.19672C15.8456 2.06478 16.0246 1.99066 16.2111 1.99066C16.3977 1.99066 16.5767 2.06478 16.7086 2.19672C16.8405 2.32865 16.9147 2.50759 16.9147 2.69418V3.46992C17.1586 3.48868 17.3893 3.51213 17.6079 3.54121C18.7072 3.68942 19.5974 4.00084 20.3 4.70248C21.0016 5.40506 21.3131 6.29525 21.4613 7.39461C21.6048 8.46395 21.6048 9.82878 21.6048 11.5529V13.534C21.6048 15.2581 21.6048 16.6238 21.4613 17.6922C21.3131 18.7916 21.0016 19.6818 20.3 20.3843C19.5974 21.086 18.7072 21.3974 17.6079 21.5456C16.5385 21.6891 15.1737 21.6891 13.4496 21.6891H9.5934C7.86931 21.6891 6.50355 21.6891 5.43515 21.5456C4.33578 21.3974 3.4456 21.086 2.74302 20.3843C2.04138 19.6818 1.72996 18.7916 1.58175 17.6922C1.43823 16.6229 1.43823 15.2581 1.43823 13.534V11.5529C1.43823 9.82878 1.43823 8.46302 1.58175 7.39461C1.72996 6.29525 2.04138 5.40506 2.74302 4.70248C3.4456 4.00084 4.33578 3.68942 5.43515 3.54121C5.65371 3.51213 5.8854 3.48868 6.12835 3.46992V2.69418C6.12834 2.50776 6.20234 2.32896 6.33407 2.19705C6.4658 2.06514 6.6445 1.99091 6.83092 1.99066ZM5.62087 4.93605C4.67816 5.06269 4.13411 5.30094 3.73733 5.69773C3.34054 6.09451 3.10228 6.63856 2.97565 7.58221C2.95408 7.74168 2.93625 7.91052 2.92125 8.08781H20.1208C20.1058 7.90958 20.088 7.74168 20.0664 7.58128C19.9398 6.63856 19.7015 6.09451 19.3047 5.69773C18.908 5.30094 18.3639 5.06269 17.4203 4.93605C16.4569 4.80661 15.1859 4.80473 13.3971 4.80473H9.64499C7.85618 4.80473 6.5861 4.80661 5.62087 4.93605ZM2.84433 11.6054C2.84433 10.8043 2.84433 10.1074 2.85652 9.49484H20.1856C20.1977 10.1074 20.1977 10.8043 20.1977 11.6054V13.4814C20.1977 15.2702 20.1959 16.5413 20.0664 17.5056C19.9398 18.4483 19.7015 18.9923 19.3047 19.3891C18.908 19.7859 18.3639 20.0241 17.4203 20.1508C16.4569 20.2802 15.1859 20.2821 13.3971 20.2821H9.64499C7.85618 20.2821 6.5861 20.2802 5.62087 20.1508C4.67816 20.0241 4.13411 19.7859 3.73733 19.3891C3.34054 18.9923 3.10228 18.4483 2.97565 17.5046C2.8462 16.5413 2.84433 15.2702 2.84433 13.4814V11.6054Z" fill="white"/>
        </svg>
    </a>
</div>

<div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title fs-5" id="appointmentModalLabel">Book Your Appointment</div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <iframe title="Warren book an appointment" width="100%" height="100%" style="min-height: 600px;" loading="lazy" src="https://www.localmed.com/widgets/b0f4c0e9-f3c8-40e2-83b8-2b46d13a2be3/" frameborder="0"></iframe>
        </div>
        </div>
    </div>
</div>

  <script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}" defer></script>
  <script src="{{asset('/assets/js/script.js')}}" defer></script>

  <link rel="preload" as="style" onload='this.rel="stylesheet"' href="{{asset('/assets/css/accessibility.css')}}">
  <script src="{{asset('/assets/js/accessibility.js')}}" defer></script>
