<!DOCTYPE html>
<html data-theme="cupcake" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    
        <div class="w-full">
            <div class="md:px-5 w-full  py-8 duration-200 relative">
                <div class="max-md:px-5  flex flex-row max-w-[1280px] mx-auto justify-between items-center w-full">
                    <h1 class="font-title text-xl font-bold mr-5">Perpustakaan</h1>
                    <div class="flex flex-row w-full items-center max-sm:hidden">
                        <div class="flex flex-row gap-6 w-full items-start justify-start"><a class="hover:underline underline-offset-2" href="#">Home</a><a class="hover:underline underline-offset-2" href="#">About</a><a class="hover:underline underline-offset-2" href="#">Pricing</a><a class="hover:underline underline-offset-2" href="#">Contact</a></div><a class="btn btn-primary ml-6" href="#">Get Started</a>
                    </div><button class="btn max-sm:btn-ghost sm:hidden text-xl font-light">☰</button>
                </div>
                <div class="hidden"><a class="hover:underline underline-offset-2 text-lg text-center" href="#">Home</a><a class="hover:underline underline-offset-2 text-lg text-center" href="#">About</a><a class="hover:underline underline-offset-2 text-lg text-center" href="#">Pricing</a><a class="hover:underline underline-offset-2 text-lg text-center" href="#">Contact</a></div>
            </div>
            <div class="p-5 w-full  bg-neutral text-neutral-content duration-200 h-fit">
                <div class="flex flex-row max-md:flex-col justify-between items-center w-full max-w-[1280px] mx-auto gap-20 max-md:gap-10 py-10">
                    <div class="w-full">
                        <div class="flex flex-row gap-2 mb-8 max-md:mx-auto w-fit max-sm:flex-col max-sm:items-center">
                            <div class="badge border-primary text-primary badge-lg">1,000+ hours saved</div>
                            <div class="badge border-primary text-primary badge-lg">100+ websites built</div>
                        </div>
                        <h1 class="font-title font-bold text-6xl w-full mb-2 max-md:text-center max-sm:text-5xl">Build your landing page in minutes, not hours.</h1>
                        <p class="font-text max-w-[450px] max-md:text-center max-md:mx-auto opacity-75">DaisyLanding is an easy-to-use toolkit for rapidly building beautiful landing pages.</p>
                        <div class="flex flex-col gap-2 mt-5 max-md:mx-auto w-fit">
                            <div class="flex flex-row items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(var(--bc))" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l5 5l10 -10"></path>
                                </svg>
                                <p class="font-text">Build in minutes</p>
                            </div>
                            <div class="flex flex-row items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(var(--bc))" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l5 5l10 -10"></path>
                                </svg>
                                <p class="font-text">No coding required</p>
                            </div>
                            <div class="flex flex-row items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(var(--bc))" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l5 5l10 -10"></path>
                                </svg>
                                <p class="font-text">Export the code</p>
                            </div>
                        </div>
                        <div class="flex flex-row gap-4 mt-8 w-fit max-md:mx-auto"><button class="btn btn-primary">Get Started</button><button class="btn">Learn More</button></div>
                        <div class="mt-10 max-md:mx-auto w-fit">
                            <div class="flex flex-wrap justify-start">
                                <div class="flex flex-row items-center">
                                    <div class="avatar-group -space-x-6 rtl:space-x-reverse">
                                        <div class="avatar">
                                            <div class="w-10"><img alt="Reviewer 1" loading="lazy" width="24" height="24" decoding="async" data-nimg="1" class="h-auto rounded-full object-cover mr-3" srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fme-red.6cc7ca95.jpg&amp;w=32&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fme-red.6cc7ca95.jpg&amp;w=48&amp;q=75 2x" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fme-red.6cc7ca95.jpg&amp;w=48&amp;q=75" style="color: transparent;"></div>
                                        </div>
                                        <div class="avatar">
                                            <div class="w-10"><img alt="Reviewer 1" loading="lazy" width="24" height="24" decoding="async" data-nimg="1" class="h-auto rounded-full object-cover mr-3" srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fme-red.6cc7ca95.jpg&amp;w=32&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fme-red.6cc7ca95.jpg&amp;w=48&amp;q=75 2x" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fme-red.6cc7ca95.jpg&amp;w=48&amp;q=75" style="color: transparent;"></div>
                                        </div>
                                        <div class="avatar">
                                            <div class="w-10"><img alt="Reviewer 1" loading="lazy" width="24" height="24" decoding="async" data-nimg="1" class="h-auto rounded-full object-cover mr-3" srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fme-red.6cc7ca95.jpg&amp;w=32&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fme-red.6cc7ca95.jpg&amp;w=48&amp;q=75 2x" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fme-red.6cc7ca95.jpg&amp;w=48&amp;q=75" style="color: transparent;"></div>
                                        </div>
                                        <div class="avatar placeholder">
                                            <div class="bg-neutral text-neutral-content w-10"><span>+99</span></div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col ml-2">
                                        <div class="flex flex-row items-center">
                                            <div class="text-xl mb-[2px]">⭐</div><span class="text-md font-bold ml-1">4.5/5 from 600 reviews</span>
                                        </div><span class="text-md opacity-65">1,000 makers launch faster</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full"><img alt="Hero" loading="lazy" width="1367" height="958" decoding="async" data-nimg="1" class="w-full rounded-lg" srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ftheme1.572279fe.jpg&amp;w=1920&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ftheme1.572279fe.jpg&amp;w=3840&amp;q=75 2x" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ftheme1.572279fe.jpg&amp;w=3840&amp;q=75" style="color: transparent;"></div>
                </div>
            </div>
            <div class="p-5 w-full  bg-base-200 text-base-content duration-200 h-fit">
                <div class="flex flex-col max-w-[1280px] mx-auto justify-between items-center w-full py-20">
                    <h1 class="font-title text-4xl font-bold text-center mb-2 w-full max-w-[500px]">Tired of building landing pages from scratch?</h1>
                    <p class="font-text max-w-[450px] text-center">DaisyLanding is the solution for you.</p>
                    <div class="mt-10 grid grid-cols-2 max-md:grid-cols-1 gap-5 w-full max-w-[1000px]">
                        <div class="bg-error/25 card p-10">
                            <p class="text-lg font-bold mb-3 text-error font-title">Building Without DaisyLanding</p>
                            <div class="flex flex-col gap-1">
                                <div class="flex flex-row gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(var(--er))" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-x">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M18 6l-12 12"></path>
                                        <path d="M6 6l12 12"></path>
                                    </svg>
                                    <p class="text-error">Spend hours coding the website.</p>
                                </div>
                                <div class="flex flex-row gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(var(--er))" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-x">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M18 6l-12 12"></path>
                                        <path d="M6 6l12 12"></path>
                                    </svg>
                                    <p class="text-error">Swapping between code and browser.</p>
                                </div>
                                <div class="flex flex-row gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(var(--er))" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-x">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M18 6l-12 12"></path>
                                        <path d="M6 6l12 12"></path>
                                    </svg>
                                    <p class="text-error">Have to make everything responsive.</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-success/25 card p-10">
                            <p class="text-lg font-bold mb-3 text-success font-title">Building With DaisyLanding</p>
                            <div class="flex flex-col gap-1">
                                <div class="flex flex-row gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(var(--su))" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M5 12l5 5l10 -10"></path>
                                    </svg>
                                    <p class="text-success">Build most of your website in minutes.</p>
                                </div>
                                <div class="flex flex-row gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(var(--su))" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M5 12l5 5l10 -10"></path>
                                    </svg>
                                    <p class="text-success">See changes in real-time.</p>
                                </div>
                                <div class="flex flex-row gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(var(--su))" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M5 12l5 5l10 -10"></path>
                                    </svg>
                                    <p class="text-success">Responsive by default.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 w-full  bg-base-100 text-base-content duration-200 h-fit">
                <div class="flex flex-col max-w-[1280px] mx-auto justify-between items-center w-full py-20">
                    <h1 class="font-title text-4xl font-bold text-center mb-2">What has been achieved</h1>
                    <p class="font-text max-w-[450px] text-center">Some stats that show the success of DaisyLanding.</p>
                    <div class="mt-10 grid max-md:grid-cols-2 max-sm:grid-cols-1 grid-cols-3 gap-5 w-full">
                        <div class="flex flex-col items-center card p-5">
                            <h1 class="font-title text-lg opacity-75">Hours Saved</h1>
                            <p class="font-text font-bold mt-3 text-7xl">1000+</p>
                        </div>
                        <div class="flex flex-col items-center card p-5">
                            <h1 class="font-title text-lg opacity-75">Websites Built</h1>
                            <p class="font-text font-bold mt-3 text-7xl">100+</p>
                        </div>
                        <div class="flex flex-col items-center card p-5">
                            <h1 class="font-title text-lg opacity-75">Happy Customers</h1>
                            <p class="font-text font-bold mt-3 text-7xl">1000+</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 w-full  bg-base-300 text-base-content duration-200 h-fit">
                <div class="flex flex-col max-w-[1280px] mx-auto justify-between items-center w-full py-20">
                    <h1 class="font-title text-4xl font-bold text-center mb-2">Pricing</h1>
                    <p class="font-text max-w-[450px] text-center">Choose the plan that works best for you.</p>
                    <div class="grid grid-cols-3 max-md:grid-cols-1 gap-5 mt-10 w-full">
                        <div class="card bg-base-100 text-base-content bordered p-8 w-full justify-between">
                            <div>
                                <p class="text-xl">Basic Plan</p>
                                <p class="text-3xl mt-1 font-bold mb-4">$9.99</p>
                                <hr>
                                <div class="mt-4">
                                    <p class="text-lg font-bold">Includes:</p>
                                    <div class="flex flex-row gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(var(--nc))" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 12l5 5l10 -10"></path>
                                        </svg>
                                        <p class="text-lg">10 Exports</p>
                                    </div>
                                    <div class="flex flex-row gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(var(--nc))" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 12l5 5l10 -10"></path>
                                        </svg>
                                        <p class="text-lg">Access to all blocks</p>
                                    </div>
                                    <div class="flex flex-row gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(var(--nc))" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 12l5 5l10 -10"></path>
                                        </svg>
                                        <p class="text-lg">Future Updates</p>
                                    </div>
                                </div>
                            </div><button class="btn w-full mt-5">Get Started</button>
                        </div>
                        <div class="card bg-primary text-primary-content bordered p-8 w-full justify-between">
                            <div>
                                <p class="text-xl">Pro Plan</p>
                                <p class="text-3xl mt-1 font-bold mb-4">$19.99</p>
                                <hr>
                                <div class="mt-4">
                                    <p class="text-lg font-bold">Includes:</p>
                                    <div class="flex flex-row gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(var(--nc))" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 12l5 5l10 -10"></path>
                                        </svg>
                                        <p class="text-lg">Unlimited Exports</p>
                                    </div>
                                    <div class="flex flex-row gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(var(--nc))" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 12l5 5l10 -10"></path>
                                        </svg>
                                        <p class="text-lg">Access to all blocks</p>
                                    </div>
                                    <div class="flex flex-row gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(var(--nc))" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 12l5 5l10 -10"></path>
                                        </svg>
                                        <p class="text-lg">Future Updates</p>
                                    </div>
                                </div>
                            </div><button class="btn w-full mt-5">Get Started</button>
                        </div>
                        <div class="card bg-base-100 text-base-content bordered p-8 w-full justify-between">
                            <div>
                                <p class="text-xl">Ultimate Plan</p>
                                <p class="text-3xl mt-1 font-bold mb-4">$29.99</p>
                                <hr>
                                <div class="mt-4">
                                    <p class="text-lg font-bold">Includes:</p>
                                    <div class="flex flex-row gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(var(--nc))" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 12l5 5l10 -10"></path>
                                        </svg>
                                        <p class="text-lg">Unlimited Exports</p>
                                    </div>
                                    <div class="flex flex-row gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(var(--nc))" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 12l5 5l10 -10"></path>
                                        </svg>
                                        <p class="text-lg">Access to all blocks</p>
                                    </div>
                                    <div class="flex flex-row gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(var(--nc))" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 12l5 5l10 -10"></path>
                                        </svg>
                                        <p class="text-lg">Future Updates</p>
                                    </div>
                                    <div class="flex flex-row gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(var(--nc))" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 12l5 5l10 -10"></path>
                                        </svg>
                                        <p class="text-lg">Priority Support</p>
                                    </div>
                                </div>
                            </div><button class="btn w-full mt-5">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 w-full  bg-accent text-accent-content duration-200 h-fit">
                <div class="flex flex-row gap-10 max-md:flex-col items-center max-w-[1280px] mx-auto justify-between w-full py-10">
                    <div class="flex flex-col max-md:w-full max-md:items-center">
                        <div class="flex flex-row items-center gap-2 mb-2"><img alt="logo" loading="lazy" width="36" height="36" decoding="async" data-nimg="1" class="w-8" src="/_next/static/media/logo1.b3408908.svg" style="color: transparent;">
                            <h1 class="mr-5 text-xl font-bold font-title">DaisyLanding</h1>
                        </div>
                        <p class="font-text max-w-[250px] text-left max-md:text-center opacity-75">Build your landing page in minutes, not hours.</p>
                        <p class="text-sm opacity-50 font-title mt-14 max-md:mt-6">Copyright © 2024 - All rights reserved</p>
                    </div>
                    <div class="flex flex-row max-lg:max-w-[450px] max-md:flex-col max-md:gap-8 max-md:items-center w-full justify-between max-w-[600px]">
                        <div class="flex flex-col items-start gap-1 font-text max-md:items-center">
                            <p class="font-semibold tracking-widest uppercase opacity-50 font-title">Main</p><a href="#">Home</a><a href="#">About</a><a href="#">Pricing</a><a href="#">FAQ</a><a href="#">Contact</a>
                        </div>
                        <div class="flex flex-col items-start gap-1 font-text max-md:items-center">
                            <p class="font-semibold tracking-widest uppercase opacity-50 font-title">Legal</p><a href="#">Terms of service</a><a href="#">Privacy policy</a>
                        </div>
                        <div class="flex flex-col items-start gap-1 max-md:items-center">
                            <p class="font-semibold tracking-widest uppercase opacity-50 font-title">Other</p><a href="https://sparktoapp.com">SparkToApp</a>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    
</body>

</html>

