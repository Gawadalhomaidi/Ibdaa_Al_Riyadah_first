@extends('layouts.app')

@section('title', __('erp.hero_title'))

@section('content')

{{-- Hero Section --}}
<section id="home" class="hero section pattern-bg flex items-center justify-center text-center pt-20">
    <div class="hero-content max-w-3xl mx-auto">
        <h1 class="hero-title font-bold mb-6">{{ __('erp.hero_title') }}</h1>
        <p class="text-lg md:text-xl mb-8">{{ __('erp.hero_subtitle') }}</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            @auth
                <a href="{{ url('/dashboard') }}" class="btn-modern">
                    <i class="fas fa-rocket ml-2"></i>
                    {{ __('erp.go_to_dashboard') }}
                </a>
            @else
                <a href="{{ route('register') }}" class="btn-modern">
                    <i class="fas fa-rocket ml-2"></i>
                    {{ __('erp.get_started') }}
                </a>
            @endauth
            <a href="#demo" class="btn-outline-modern">
                <i class="fas fa-play-circle ml-2"></i>
                {{ __('erp.demo') }}
            </a>
        </div>
    </div>
</section>

{{-- Animated Grid Section --}}
<section class="section bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 fade-in-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">{{ __('erp.animated_section_title') }}</h2>
            <p class="text-gray-600 max-w-3xl mx-auto">{{ __('erp.animated_section_desc') }}</p>
        </div>
        
        <div class="animated-grid max-w-5xl mx-auto mb-12">
            @foreach([
                ['text' => __('erp.feature1'), 'icon' => 'fas fa-warehouse'],
                ['text' => __('erp.feature2'), 'icon' => 'fas fa-chart-line'],
                ['text' => __('erp.feature3'), 'icon' => 'fas fa-users'],
                ['text' => __('erp.feature4'), 'icon' => 'fas fa-envelope'],
                ['text' => __('erp.feature5'), 'icon' => 'fas fa-chart-bar'],
                ['text' => __('erp.feature6'), 'icon' => 'fas fa-user-tie'],
            ] as $index => $feature)
            <div class="grid-item group relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-500/10 to-primary-600/5 rounded-lg"></div>
                <div class="relative z-10 w-full h-full flex flex-col items-center justify-center p-4 text-center">
                    <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                        <i class="{{ $feature['icon'] }} text-white text-lg"></i>
                    </div>
                    <span class="text-white font-semibold text-sm md:text-base leading-tight">
                        {{ $feature['text'] }}
                    </span>
                </div>
                <div class="absolute inset-0 bg-gradient-to-br from-primary-600/20 to-primary-700/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg"></div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center fade-in-up">
            <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-8">{{ __('erp.animated_section_text') }}</p>
            <a href="#about" class="btn-modern">
                {{ __('erp.learn_more') }}
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

{{-- Expanded About Section --}}
<section id="about" class="expanded-about section">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 fade-in-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">{{ __('erp.about_title') }}</h2>
            <p class="text-gray-600 max-w-3xl mx-auto">{{ __('erp.about_description') }}</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-16">
            <div class="fade-in-up">
                <div class="mission-card">
                    <h3 class="text-2xl font-bold mb-4">{{ __('erp.our_mission') }}</h3>
                    <p class="text-gray-600 mb-6">{{ __('erp.our_mission_desc') }}</p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-indigo-600 mt-1 mr-3"></i>
                            <span class="text-gray-600">{{ __('erp.mission_point1') }}</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-indigo-600 mt-1 mr-3"></i>
                            <span class="text-gray-600">{{ __('erp.mission_point2') }}</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-indigo-600 mt-1 mr-3"></i>
                            <span class="text-gray-600">{{ __('erp.mission_point3') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="fade-in-up" style="animation-delay: 0.2s">
                <div class="stats-grid">
                    <h3 class="text-2xl font-bold mb-4">{{ __('erp.why_choose_us') }}</h3>
                    <p class="mb-6 opacity-90">{{ __('erp.why_choose_us_desc') }}</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="stats-item">
                            <div class="text-2xl font-bold">99.9%</div>
                            <div class="text-sm opacity-80">{{ __('erp.uptime') }}</div>
                        </div>
                        <div class="stats-item">
                            <div class="text-2xl font-bold">24/7</div>
                            <div class="text-sm opacity-80">{{ __('erp.support') }}</div>
                        </div>
                        <div class="stats-item">
                            <div class="text-2xl font-bold">500+</div>
                            <div class="text-sm opacity-80">{{ __('erp.clients') }}</div>
                        </div>
                        <div class="stats-item">
                            <div class="text-2xl font-bold">5+</div>
                            <div class="text-sm opacity-80">{{ __('erp.experience') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- features Section --}}
<section id="features" class="section bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 fade-in-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">{{ __('erp.features_title') }}</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">{{ __('erp.features_subtitle') }}</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="modern-card p-6 fade-in-up">
                <div class="icon-wrapper">
                    <i class="fas fa-bolt text-xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">{{ __('erp.feature_speed') }}</h3>
                <p class="text-gray-600">{{ __('erp.feature_speed_desc') }}</p>
            </div>
            
            <div class="modern-card p-6 fade-in-up" style="animation-delay: 0.1s">
                <div class="icon-wrapper">
                    <i class="fas fa-shield-alt text-xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">{{ __('erp.feature_security') }}</h3>
                <p class="text-gray-600">{{ __('erp.feature_security_desc') }}</p>
            </div>
            
            <div class="modern-card p-6 fade-in-up" style="animation-delay: 0.2s">
                <div class="icon-wrapper">
                    <i class="fas fa-sync text-xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">{{ __('erp.feature_sync') }}</h3>
                <p class="text-gray-600">{{ __('erp.feature_sync_desc') }}</p>
            </div>
            
            <div class="modern-card p-6 fade-in-up" style="animation-delay: 0.3s">
                <div class="icon-wrapper">
                    <i class="fas fa-chart-line text-xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">{{ __('erp.feature_reports') }}</h3>
                <p class="text-gray-600">{{ __('erp.feature_reports_desc') }}</p>
            </div>
            
            <div class="modern-card p-6 fade-in-up" style="animation-delay: 0.4s">
                <div class="icon-wrapper">
                    <i class="fas fa-mobile-alt text-xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">{{ __('erp.feature_multi_platform') }}</h3>
                <p class="text-gray-600">{{ __('erp.feature_multi_platform_desc') }}</p>
            </div>
            
            <div class="modern-card p-6 fade-in-up" style="animation-delay: 0.5s">
                <div class="icon-wrapper">
                    <i class="fas fa-cogs text-xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">{{ __('erp.feature_customization') }}</h3>
                <p class="text-gray-600">{{ __('erp.feature_customization_desc') }}</p>
            </div>
        </div>
    </div>
</section>

{{-- modules Section --}}
<section id="modules" class="section  relative overflow-hidden bg-gray-50">
    <div class="absolute inset-0 overflow-hidden">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
        <div class="floating-shape shape-4"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16 fade-in-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800 dark:text-white">{{ __('erp.modules_title') }}</h2>
            <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">{{ __('erp.modules_subtitle') }}</p>
        </div>
        
        <div class="modules-scroll-container">
            <div class="modules-scroll-wrapper">
                @foreach([
                  ['icon' => 'fas fa-users', 'title' => 'modules_hr_title', 'desc' => 'modules_hr_desc', 'color' => 'from-blue-500 to-blue-600'],
                  ['icon' => 'fas fa-calculator', 'title' => 'modules_accounting_title', 'desc' => 'modules_accounting_desc', 'color' => 'from-green-500 to-green-600'],
                  ['icon' => 'fas fa-warehouse', 'title' => 'modules_inventory_title', 'desc' => 'modules_inventory_desc', 'color' => 'from-purple-500 to-purple-600'],
                  ['icon' => 'fas fa-shopping-cart', 'title' => 'modules_sales_title', 'desc' => 'modules_sales_desc', 'color' => 'from-orange-500 to-orange-600'],
                  ['icon' => 'fas fa-shopping-bag', 'title' => 'modules_purchases_title', 'desc' => 'modules_purchases_desc', 'color' => 'from-red-500 to-red-600'],
                  ['icon' => 'fas fa-cog', 'title' => 'modules_settings_title', 'desc' => 'modules_settings_desc', 'color' => 'from-indigo-500 to-indigo-600'],
                  ['icon' => 'fas fa-chart-bar', 'title' => 'modules_analytics_title', 'desc' => 'modules_analytics_desc', 'color' => 'from-teal-500 to-teal-600'],
                  ['icon' => 'fas fa-file-invoice', 'title' => 'modules_invoicing_title', 'desc' => 'modules_invoicing_desc', 'color' => 'from-pink-500 to-pink-600'],
                ] as $index => $mod)
                  <div class="module-card group bg-white dark:bg-gray-800">
                    <div class="module-card-inner">
                      <div class="module-gradient {{ $mod['color'] }}"></div>
                      <div class="module-content">
                        <div class="module-icon-container">
                          <div class="module-icon-bg {{ $mod['color'] }}"></div>
                          <i class="{{ $mod['icon'] }} modules-icons"></i>
                        </div>
                        <h3 class="module-title">{{ __('erp.' . $mod['title']) }}</h3>
                        <p class="module-desc">{{ __('erp.' . $mod['desc']) }}</p>
                        <div class="module-actions">
                          <button class="module-btn">
                            <span>{{ __('erp.explore_module') }}</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
            </div>
        </div>
        
        <div class="flex justify-center mt-8 space-x-2">
            <button class="module-nav-btn module-nav-prev">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="module-indicators flex space-x-1">
                @foreach(range(0, 7) as $index)
                <button class="module-indicator {{ $index === 0 ? 'active' : '' }}" data-index="{{ $index }}"></button>
                @endforeach
            </div>
            <button class="module-nav-btn module-nav-next">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        
        <div class="mt-12 text-center">
            <button class="btn-modern">
                <i class="fas fa-list ml-2"></i>
                {{ __('erp.view_all_modules') }}
            </button>
        </div>
    </div>
</section>

{{-- technologies Section --}}
<section id="animation" class="animation-section section relative">
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16 fade-in-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">{{ __('erp.technologies_title') }}</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">{{ __('erp.technologies_subtitle') }}</p>
        </div>
        
        <div class="grid grid-cols-1 p-6 md:grid-cols-2 gap-12 items-center">
            <div class="fade-in-up p-6">
                <div class="mb-8">
                    <div class="flex items-center justify-between mb-2 gap-4">
                        <h3 class="text-xl font-bold">{{ __('erp.performance') }}</h3>
                        <span class="text-indigo-600 font-bold">95%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-indigo-600 h-3 rounded-full" style="width: 95%"></div>
                    </div>
                </div>
                
                <div class="mb-8">
                    <div class="flex items-center justify-between mb-2 gap-4">
                        <h3 class="text-xl font-bold">{{ __('erp.security') }}</h3>
                        <span class="text-indigo-600 font-bold">98%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-indigo-600 h-3 rounded-full" style="width: 98%"></div>
                    </div>
                </div>
                
                <div class="mb-8">
                    <div class="flex items-center justify-between mb-2 gap-4">
                        <h3 class="text-xl font-bold">{{ __('erp.usability') }}</h3>
                        <span class="text-indigo-600 font-bold">92%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-indigo-600 h-3 rounded-full" style="width: 92%"></div>
                    </div>
                </div>
                
                <div>
                    <div class="flex items-center justify-between mb-2 gap-4">
                        <h3 class="text-xl font-bold">{{ __('erp.integration') }}</h3>
                        <span class="text-indigo-600 font-bold">90%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-indigo-600 h-3 rounded-full" style="width: 90%"></div>
                    </div>
                </div>
            </div>
            
            <div class="fade-in-up" style="animation-delay: 0.2s">
                <div class="bg-white modern-card p-8">
                    <h3 class="text-2xl font-bold mb-6 text-center">{{ __('erp.used_technologies') }}</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-database text-indigo-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold">{{ __('erp.secure_database') }}</h4>
                                <p class="text-gray-600 text-sm">{{ __('erp.secure_database_desc') }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-cloud text-green-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold">{{ __('erp.cloud_computing') }}</h4>
                                <p class="text-gray-600 text-sm">{{ __('erp.cloud_computing_desc') }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-robot text-purple-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold">{{ __('erp.ai') }}</h4>
                                <p class="text-gray-600 text-sm">{{ __('erp.ai_desc') }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-mobile-alt text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold">{{ __('erp.responsive_design') }}</h4>
                                <p class="text-gray-600 text-sm">{{ __('erp.responsive_design_desc') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- pricing Section --}}
<section id="pricing" class="section bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 fade-in-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800 dark:text-white">{{ __('erp.pricing_title') }}</h2>
            <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">{{ __('erp.pricing_subtitle') }}</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="modern-card p-8 p-6 text-center fade-in-up">
                <h3 class="text-2xl font-bold mb-2">{{ __('erp.basic_plan') }}</h3>
                <div class="text-gray-600 mb-6">{{ __('erp.basic_plan_desc') }}</div>
                
                <div class="mb-6">
                    <span class="text-4xl font-bold">199</span>
                    <span class="text-gray-600">{{ __('erp.sar_monthly') }}</span>
                </div>
                
                <ul class="space-y-4 mb-8 text-right">
                    <li class="flex items-center justify-end">
                        <span class="mr-2">{{ __('erp.up_to_10_users') }}</span>
                        <i class="fas fa-check text-green-500"></i>
                    </li>
                    <li class="flex items-center justify-end">
                        <span class="mr-2">{{ __('erp.5_basic_modules') }}</span>
                        <i class="fas fa-check text-green-500"></i>
                    </li>
                    <li class="flex items-center justify-end">
                        <span class="mr-2">{{ __('erp.email_support') }}</span>
                        <i class="fas fa-check text-green-500"></i>
                    </li>
                    <li class="flex items-center justify-end">
                        <span class="mr-2">{{ __('erp.10gb_storage') }}</span>
                        <i class="fas fa-check text-green-500"></i>
                    </li>
                    <li class="flex items-center justify-end text-gray-400">
                        <span class="mr-2">{{ __('erp.advanced_reports') }}</span>
                        <i class="fas fa-times text-red-400"></i>
                    </li>
                </ul>
                
                <button class="btn-outline-modern w-full">{{ __('erp.choose_plan') }}</button>
            </div>
            
            <div class="modern-card p-8 p-6 text-center relative fade-in-up" style="animation-delay: 0.1s">
                <div class="absolute top-2 left-1/2 transform -translate-x-1/2 btn-modern text-white px-4 py-1 rounded-full text-sm font-bold">
                    {{ __('erp.most_popular') }}
                </div>
                <h3 class="text-2xl p-8 font-bold mb-2">{{ __('erp.advanced_plan') }}</h3>
                <div class="text-gray-600 mb-6">{{ __('erp.advanced_plan_desc') }}</div>
                
                <div class="mb-6">
                    <span class="text-4xl font-bold">399</span>
                    <span class="text-gray-600">{{ __('erp.sar_monthly') }}</span>
                </div>
                
                <ul class="space-y-4 mb-8 text-right">
                    <li class="flex items-center justify-end">
                        <span class="mr-2">{{ __('erp.up_to_50_users') }}</span>
                        <i class="fas fa-check text-green-500"></i>
                    </li>
                    <li class="flex items-center justify-end">
                        <span class="mr-2">{{ __('erp.all_modules') }}</span>
                        <i class="fas fa-check text-green-500"></i>
                    </li>
                    <li class="flex items-center justify-end">
                        <span class="mr-2">{{ __('erp.phone_support') }}</span>
                        <i class="fas fa-check text-green-500"></i>
                    </li>
                    <li class="flex items-center justify-end">
                        <span class="mr-2">{{ __('erp.50gb_storage') }}</span>
                        <i class="fas fa-check text-green-500"></i>
                    </li>
                    <li class="flex items-center justify-end">
                        <span class="mr-2">{{ __('erp.advanced_reports') }}</span>
                        <i class="fas fa-check text-green-500"></i>
                    </li>
                </ul>
                
                <button class="btn-modern w-full">{{ __('erp.choose_plan') }}</button>
            </div>
            
            <div class="modern-card p-8 p-6 text-center fade-in-up" style="animation-delay: 0.2s">
                <h3 class="text-2xl font-bold mb-2">{{ __('erp.enterprise_plan') }}</h3>
                <div class="text-gray-600 mb-6">{{ __('erp.enterprise_plan_desc') }}</div>
                
                <div class="mb-6">
                    <span class="text-4xl font-bold">699</span>
                    <span class="text-gray-600">{{ __('erp.sar_monthly') }}</span>
                </div>
                
                <ul class="space-y-4 mb-8 text-right">
                    <li class="flex items-center justify-end">
                        <span class="mr-2">{{ __('erp.unlimited_users') }}</span>
                        <i class="fas fa-check text-green-500"></i>
                    </li>
                    <li class="flex items-center justify-end">
                        <span class="mr-2">{{ __('erp.all_custom_modules') }}</span>
                        <i class="fas fa-check text-green-500"></i>
                    </li>
                    <li class="flex items-center justify-end">
                        <span class="mr-2">{{ __('erp.dedicated_support') }}</span>
                        <i class="fas fa-check text-green-500"></i>
                    </li>
                    <li class="flex items-center justify-end">
                        <span class="mr-2">{{ __('erp.unlimited_storage') }}</span>
                        <i class="fas fa-check text-green-500"></i>
                    </li>
                    <li class="flex items-center justify-end">
                        <span class="mr-2">{{ __('erp.ai_reports') }}</span>
                        <i class="fas fa-check text-green-500"></i>
                    </li>
                </ul>
                
                <button class="btn-outline-modern w-full">{{ __('erp.choose_plan') }}</button>
            </div>
        </div>
    </div>
</section>

{{-- values Section --}}
<section id="values" class="section bg-gray-50 from-gray-50 to-white dark:from-gray-900 dark:to-gray-800 py-20 relative overflow-hidden">

    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-10 -left-10 w-72 h-72 bg-primary-500/5 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-20 -right-20 w-96 h-96 bg-primary-600/5 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-primary-400/3 rounded-full blur-2xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16 fade-in-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800 dark:text-white">{{ __('erp.values_title') }}</h2>
            <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto text-lg">{{ __('erp.values_subtitle') }}</p>
        </div>
        
        <div class="relative">
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-32 h-32 md:w-40 md:h-40 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center shadow-2xl">
                <div class="text-center text-white">
                    <i class="fas fa-star text-xl md:text-2xl mb-1"></i>
                    <div class="text-3xl md:text-4xl font-bold mb-4 text-gray-800 dark:text-white">{{ __('erp.our_values') }}</div>
                </div>
            </div>
            <div class="values-circle-container relative h-96 md:h-[500px]">
                @foreach([
                    ['icon' => 'fas fa-award', 'title' => 'values_quality_title', 'desc' => 'values_quality_desc', 'color' => 'from-emerald-500 to-green-600'],
                    ['icon' => 'fas fa-bolt', 'title' => 'values_innovation_title', 'desc' => 'values_innovation_desc', 'color' => 'from-blue-500 to-indigo-600'],
                    ['icon' => 'fas fa-shield-alt', 'title' => 'values_trust_title', 'desc' => 'values_trust_desc', 'color' => 'from-purple-500 to-violet-600'],
                    ['icon' => 'fas fa-heart', 'title' => 'values_excellence_title', 'desc' => 'values_excellence_desc', 'color' => 'from-pink-500 to-rose-600'],
                ] as $index => $value)
                <div class="value-circle-item absolute top-1/2 left-1/2 transform transition-all duration-700 ease-in-out hover:scale-110 group value-circle-{{ $loop->index }}">
                    <div class="value-circle w-24 h-24 md:w-28 md:h-28 bg-gradient-to-br {{ $value['color'] }} rounded-full flex items-center justify-center text-white shadow-2xl cursor-pointer transition-all duration-500 group-hover:shadow-3xl relative overflow-hidden">
                        <i class="{{ $value['icon'] }} text-xl md:text-2xl transition-transform duration-300 group-hover:scale-110"></i>
                        <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity duration-300 rounded-full"></div>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-white rounded-full animate-ping"></div>
                            <div class="absolute bottom-1/4 right-1/4 w-1 h-1 bg-white rounded-full animate-ping" style="animation-delay: 0.3s;"></div>
                        </div>
                    </div>
                    <div class="value-card absolute top-full left-1/2 transform -translate-x-1/2 mt-6 w-64 bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-500 group-hover:mt-4 z-30 border border-gray-200 dark:border-gray-700">
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 border-8 border-transparent border-b-white dark:border-b-gray-800"></div>
                        <div class="text-center">
                            <div class="w-12 h-12 bg-gradient-to-br {{ $value['color'] }} rounded-xl flex items-center justify-center text-white mb-4 mx-auto">
                                <i class="{{ $value['icon'] }}"></i>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-2">{{ __('erp.' . $value['title']) }}</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                                {{ __('erp.' . $value['desc']) }}
                            </p>
                        </div>
                        <div class="absolute -inset-1 bg-gradient-to-r {{ $value['color'] }} rounded-2xl opacity-0 group-hover:opacity-10 -z-10 transition-opacity duration-500 blur-sm"></div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="absolute inset-0 pointer-events-none">
                <svg class="w-full h-full" viewBox="0 0 100 100">
                    @foreach([0, 90, 180, 270] as $angle)
                    <line x1="50" y1="50" 
                           x2="{{ 50 + 40 * cos(deg2rad($angle)) }}" 
                           y2="{{ 50 + 40 * sin(deg2rad($angle)) }}" 
                           stroke="url(#lineGradient{{ $angle }})" 
                           stroke-width="0.5" 
                           stroke-dasharray="2 2"
                           class="animate-dash">
                        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="3s" repeatCount="indefinite" />
                    </line>
                    @endforeach
                    <defs>
                        <linearGradient id="lineGradient0" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" stop-color="#10b981" stop-opacity="0.6" />
                            <stop offset="100%" stop-color="#059669" stop-opacity="0.3" />
                        </linearGradient>
                        <linearGradient id="lineGradient90" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" stop-color="#3b82f6" stop-opacity="0.6" />
                            <stop offset="100%" stop-color="#1d4ed8" stop-opacity="0.3" />
                        </linearGradient>
                        <linearGradient id="lineGradient180" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" stop-color="#8b5cf6" stop-opacity="0.6" />
                            <stop offset="100%" stop-color="#7c3aed" stop-opacity="0.3" />
                        </linearGradient>
                        <linearGradient id="lineGradient270" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" stop-color="#ec4899" stop-opacity="0.6" />
                            <stop offset="100%" stop-color="#db2777" stop-opacity="0.3" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
</section>

{{-- systems Section --}}
<section id="systems" class="section bg-gray-50 from-slate-50 to-gray-100 dark:from-gray-900 dark:to-slate-800 py-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-40">
        <div class="absolute top-10 left-10 w-32 h-32 bg-blue-500/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute top-1/3 right-20 w-24 h-24 bg-green-500/10 rounded-full blur-3xl animate-float" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-20 left-1/4 w-28 h-28 bg-purple-500/10 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-10 right-10 w-32 h-32 bg-orange-500/10 rounded-full blur-3xl animate-float" style="animation-delay: 3s;"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16 fade-in-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800 dark:text-white">{{ __('erp.systems_title') }}</h2>
            <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto text-lg">{{ __('erp.systems_subtitle') }}</p>
        </div>
        <div class="systems-pyramid relative h-[600px] md:h-[700px] flex items-center justify-center">
            @foreach([
                ['icon' => 'fas fa-rocket', 'title' => 'systems_riyadex_title', 'desc' => 'systems_riyadex_desc', 'level' => 'top', 'color' => 'from-purple-500 to-indigo-600', 'delay' => 0],
                ['icon' => 'fas fa-briefcase', 'title' => 'systems_riyadah_title', 'desc' => 'systems_riyadah_desc', 'level' => 'middle', 'color' => 'from-blue-500 to-cyan-600', 'delay' => 0.1],
                ['icon' => 'fas fa-wifi', 'title' => 'systems_wifi_title', 'desc' => 'systems_wifi_desc', 'level' => 'middle', 'color' => 'from-green-500 to-emerald-600', 'delay' => 0.2],
                ['icon' => 'fas fa-check-circle', 'title' => 'systems_itask_title', 'desc' => 'systems_itask_desc', 'level' => 'base', 'color' => 'from-orange-500 to-amber-600', 'delay' => 0.3],
            ] as $index => $system)
            <div class="system-tier absolute left-1/2 transform -translate-x-1/2 transition-all duration-700 ease-out group delay-{{ str_replace('.', '', $system['delay']) }}"
                data-tier="{{ $system['level'] }}">
                <div class="system-card relative bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-2xl border border-gray-200 dark:border-gray-700 transition-all duration-500 group-hover:scale-110 group-hover:shadow-3xl group-hover:z-30 cursor-pointer">
                    <div class="absolute -top-3 -right-3 w-6 h-6 bg-gradient-to-r {{ $system['color'] }} rounded-full flex items-center justify-center">
                        <i class="fas fa-plus text-white text-xs"></i>
                    </div>
                    <div class="system-icon mb-4 relative">
                        <div class="w-16 h-16 bg-gradient-to-br {{ $system['color'] }} rounded-2xl flex items-center justify-center text-white shadow-lg mx-auto transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-500">
                            <i class="{{ $system['icon'] }} text-xl"></i>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-br {{ $system['color'] }} rounded-2xl opacity-0 group-hover:opacity-20 blur-md transition-opacity duration-500 -z-10"></div>
                    </div> 
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-3 text-center group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r {{ $system['color'] }} transition-all duration-300">
                        {{ __('erp.' . $system['title']) }}
                    </h3>
                    
                    <p class="text-gray-600 dark:text-gray-300 text-sm text-center leading-relaxed opacity-0 group-hover:opacity-100 transform group-hover:translate-y-0 translate-y-4 transition-all duration-500">
                        {{ __('erp.' . $system['desc']) }}
                    </p>
                    <div class="system-connector absolute left-1/2 transform -translate-x-1/2 w-0.5 bg-gradient-to-b {{ $system['color'] }} opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute -inset-2 rounded-2xl bg-gradient-to-r {{ $system['color'] }} opacity-0 group-hover:opacity-10 transition-opacity duration-500 -z-10"></div>
                </div>
                <div class="system-popup absolute left-1/2 transform -translate-x-1/2 mt-4 bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-2xl w-80 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:mt-6 transition-all duration-500 z-40 border border-gray-200 dark:border-gray-700">
                    <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 border-8 border-transparent border-b-white dark:border-b-gray-800"></div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-gradient-to-br {{ $system['color'] }} rounded-xl flex items-center justify-center text-white mb-4 mx-auto">
                            <i class="{{ $system['icon'] }}"></i>
                        </div>
                        <h4 class="text-lg font-bold text-gray-800 dark:text-white mb-3">{{ __('erp.' . $system['title']) }}</h4>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4 leading-relaxed">
                            {{ __('erp.' . $system['desc']) }}
                        </p>
                        <div class="system-features space-y-2 text-left">
                            @foreach($system['features'] ?? ['feature1', 'feature2', 'feature3'] as $feature)
                            <div class="flex items-center text-xs text-gray-600 dark:text-gray-400">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>{{ __('erp.' . $system['title'] . '_' . $feature) }}</span>
                            </div>
                            @endforeach
                        </div>
                        <button class="system-action-btn w-full mt-4 py-2 px-4 bg-gradient-to-r {{ $system['color'] }} text-white rounded-lg font-semibold text-sm transition-all duration-300 hover:shadow-lg hover:scale-105 transform">
                            {{ __('erp.learn_more') }}
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="systems-progress mt-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                @foreach([
                    ['title' => 'systems_riyadex_title', 'progress' => 95, 'color' => 'bg-gradient-to-r from-purple-500 to-indigo-600'],
                    ['title' => 'systems_riyadah_title', 'progress' => 88, 'color' => 'bg-gradient-to-r from-blue-500 to-cyan-600'],
                    ['title' => 'systems_wifi_title', 'progress' => 92, 'color' => 'bg-gradient-to-r from-green-500 to-emerald-600'],
                    ['title' => 'systems_itask_title', 'progress' => 85, 'color' => 'bg-gradient-to-r from-orange-500 to-amber-600'],
                ] as $progress)
                <div class="progress-item bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-200 dark:border-gray-700 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">{{ __('erp.' . $progress['title']) }}</span>
                        <span class="text-lg font-bold text-gray-800 dark:text-white">{{ $progress['progress'] }}%</span>
                    </div>
                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                <div class="h-3 rounded-full {{ $progress['color'] }} transition-all duration-1000 ease-out progress-bar"
                    data-progress="{{ $progress['progress'] }}"></div>
                    </div>
                    <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400 mt-2">
                        <span>{{ __('erp.performance') }}</span>
                        <span>{{ __('erp.optimized') }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="systems-cta mt-12 text-center">
            <div class="bg-gradient-to-r from-slate-800 to-gray-900 dark:from-gray-800 dark:to-slate-900 rounded-3xl p-8 md:p-12 text-white relative overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute top-0 left-0 w-32 h-32 bg-white rounded-full blur-3xl animate-pulse"></div>
                    <div class="absolute bottom-0 right-0 w-40 h-40 bg-blue-400 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
                </div>
                
                <div class="relative z-10">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">{{ __('erp.systems_cta_title') }}</h3>
                    <p class="text-gray-300 mb-6 max-w-2xl mx-auto">{{ __('erp.systems_cta_desc') }}</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button class="bg-white text-gray-900 px-8 py-3 rounded-xl font-semibold hover:shadow-2xl transition-all duration-300 hover:scale-105 transform">
                            <i class="fas fa-play-circle mr-2"></i>
                            {{ __('erp.view_demo') }}
                        </button>
                        <button class="border-2 border-white text-white px-8 py-3 rounded-xl font-semibold hover:bg-white hover:text-gray-900 transition-all duration-300">
                            <i class="fas fa-download mr-2"></i>
                            {{ __('erp.download_guide') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Media & Training Section --}}
<section id="media" class="section bg-white dark:bg-gray-900 py-20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 fade-in-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800 dark:text-white">{{ __('erp.media_title') }}</h2>
            <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">{{ __('erp.media_subtitle') }}</p>
        </div>
        <div class="relative">
            <div class="absolute inset-0 hidden lg:block">
                <svg class="w-full h-full" viewBox="0 0 1000 600" fill="none">
                    <path id="connection-1" d="M200,150 L400,150 L400,450" stroke="url(#gradient1)" stroke-width="2" stroke-dasharray="8 4" class="animate-pulse"/>
                    <path id="connection-2" d="M500,150 L300,150 L300,450" stroke="url(#gradient2)" stroke-width="2" stroke-dasharray="8 4" class="animate-pulse" style="animation-delay: 1s"/>
                    <path id="connection-3" d="M800,150 L600,150 L600,450" stroke="url(#gradient3)" stroke-width="2" stroke-dasharray="8 4" class="animate-pulse" style="animation-delay: 2s"/>
                    <defs>
                        <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" stop-color="#6366f1" stop-opacity="0.6"/>
                            <stop offset="100%" stop-color="#8b5cf6" stop-opacity="0.6"/>
                        </linearGradient>
                        <linearGradient id="gradient2" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" stop-color="#10b981" stop-opacity="0.6"/>
                            <stop offset="100%" stop-color="#059669" stop-opacity="0.6"/>
                        </linearGradient>
                        <linearGradient id="gradient3" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" stop-color="#f59e0b" stop-opacity="0.6"/>
                            <stop offset="100%" stop-color="#d97706" stop-opacity="0.6"/>
                        </linearGradient>
                    </defs>
                </svg>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 relative z-10">
                @foreach([
                    ['icon' => 'fas fa-video', 'title' => 'media_production_title', 'desc' => 'media_production_desc', 'color' => 'from-blue-500 to-purple-600', 'bg' => 'blue'],
                    ['icon' => 'fas fa-bullhorn', 'title' => 'media_marketing_title', 'desc' => 'media_marketing_desc', 'color' => 'from-green-500 to-emerald-600', 'bg' => 'green'],
                    ['icon' => 'fas fa-graduation-cap', 'title' => 'media_training_title', 'desc' => 'media_training_desc', 'color' => 'from-orange-500 to-amber-600', 'bg' => 'orange'],
                ] as $index => $service)
                <div class="media-interactive-card group" data-media-index="{{ $index }}">
                    <div class="h-2 bg-gradient-to-r {{ $service['color'] }} rounded-t-2xl"></div>
                    
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-b-2xl border border-gray-200 dark:border-gray-700 transition-all duration-500 group-hover:shadow-2xl group-hover:-translate-y-3">
                        <div class="flex items-start justify-between mb-4">
                            <div class="media-icon-container p-3 rounded-xl bg-gradient-to-br {{ $service['color'] }} text-white transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-300">
                                <i class="{{ $service['icon'] }} text-xl"></i>
                            </div>
                            <span class="media-badge px-3 py-1 rounded-full text-xs font-medium bg-{{ $service['bg'] }}-100 text-{{ $service['bg'] }}-800 dark:bg-{{ $service['bg'] }}-900 dark:text-{{ $service['bg'] }}-200">
                                {{ __('erp.service') }}
                            </span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-800 dark:text-white group-hover:text-gray-900 dark:group-hover:text-white transition-colors">
                            {{ __('erp.' . $service['title']) }}
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                            {{ __('erp.' . $service['desc']) }}
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                <span class="text-sm text-gray-500 dark:text-gray-400">{{ __('erp.active') }}</span>
                            </div>
                            <div class="text-xs text-gray-500 dark:text-gray-400">
                                <i class="fas fa-clock mr-1"></i>
                                {{ __('erp.real_time') }}
                            </div>
                        </div>
                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2 mb-6">
                            <div class="h-2 rounded-full bg-gradient-to-r {{ $service['color'] }} transition-all duration-1000 progress-{{ $index }}"></div>
                        </div>
                        <button class="media-explore-btn w-full py-3 px-4 bg-transparent border-2 border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-xl font-semibold transition-all duration-300 group-hover:border-transparent group-hover:bg-gradient-to-r {{ $service['color'] }} group-hover:text-white group-hover:shadow-lg transform group-hover:scale-105">
                            <span class="flex items-center justify-center">
                                {{ __('erp.explore_service') }}
                                <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                            </span>
                        </button>
                        <div class="media-sparkle absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                            <div class="absolute top-2 right-2 w-3 h-3 bg-white rounded-full opacity-60 animate-ping"></div>
                            <div class="absolute bottom-2 left-2 w-2 h-2 bg-white rounded-full opacity-40 animate-pulse"></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="text-center mt-12">
            <button class="cta-medias-btn relative overflow-hidden bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 hover:from-indigo-700 hover:to-purple-700 hover:shadow-2xl hover:scale-105 transform group">
                <span class="relative z-10 flex items-center justify-center">
                    <i class="fas fa-play-circle ml-2 mr-3"></i>
                    {{ __('erp.view_all_services') }}
                    <i class="fas fa-arrow-right ml-3 transform group-hover:translate-x-1 transition-transform"></i>
                </span>
                <div class="absolute inset-0 bg-gradient-to-r from-white to-transparent opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
            </button>
        </div>
    </div>
</section>

{{-- Partners Section --}}
<section id="partners" class="relative py-20 bg-gray-50 from-gray-50 to-white dark:from-gray-900 dark:to-slate-800 overflow-hidden">
    <div class="absolute inset-0 opacity-40">
        <div class="absolute top-10 left-10 w-32 h-32 bg-blue-500/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute top-1/3 right-20 w-24 h-24 bg-green-500/10 rounded-full blur-3xl animate-float" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-20 left-1/4 w-28 h-28 bg-purple-500/10 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-10 right-10 w-32 h-32 bg-orange-500/10 rounded-full blur-3xl animate-float" style="animation-delay: 3s;"></div>
    </div>
    <div class="absolute bottom-0 w-full opacity-5">
        <svg viewBox="0 0 1440 200" class="w-full h-auto">
            <path 
                fill="#4f46e5" 
                d="M0,128L48,122.7C96,117,192,107,288,112C384,117,480,139,576,138.7C672,139,768,117,864,101.3C960,85,1056,75,1152,85.3C1248,96,1344,128,1392,144L1440,160L1440,200L1392,200C1344,200,1248,200,1152,200C1056,200,960,200,864,200C768,200,672,200,576,200C480,200,384,200,288,200C192,200,96,200,48,200L0,200Z"
            ></path>
        </svg>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in-up">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">{{ __('erp.partnerstitle') }}</h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">{{ __('erp.partners_subtitle') }}</p>
        </div>
        <div class="relative">
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-32 h-32 md:w-40 md:h-40 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center shadow-2xl ">
                <div class="text-center text-white">
                    <i class="fas fa-handshake text-xl md:text-2xl mb-1"></i>
                    <div class="text-xs md:text-sm font-bold">{{ __('erp.our_partners') }}</div>
                </div>
            </div>
            <div class="partners-circle relative h-96 md:h-[500px]">
                @foreach([
                    ['name' => 'Microsoft', 'logo' => 'fab fa-microsoft', 'color' => 'from-blue-500 to-blue-700', 'sector' => 'technology'],
                    ['name' => 'Google', 'logo' => 'fab fa-google', 'color' => 'from-green-500 to-green-600', 'sector' => 'technology'],
                    ['name' => 'Amazon', 'logo' => 'fab fa-amazon', 'color' => 'from-orange-500 to-amber-600', 'sector' => 'ecommerce'],
                    ['name' => 'Apple', 'logo' => 'fab fa-apple', 'color' => 'from-gray-500 to-gray-700', 'sector' => 'technology'],
                    ['name' => 'Samsung', 'logo' => 'fas fa-mobile-alt', 'color' => 'from-blue-600 to-indigo-700', 'sector' => 'electronics'],
                    ['name' => 'IBM', 'logo' => 'fas fa-server', 'color' => 'from-blue-700 to-blue-900', 'sector' => 'technology'],
                    ['name' => 'Oracle', 'logo' => 'fas fa-database', 'color' => 'from-red-500 to-red-700', 'sector' => 'software'],
                    ['name' => 'Intel', 'logo' => 'fas fa-microchip', 'color' => 'from-blue-400 to-blue-600', 'sector' => 'hardware'],
                ] as $index => $partner)
                <div class="partner-item absolute transform -translate-x-1/2 -translate-y-1/2 transition-all duration-700 ease-out group partner-item-{{ $index }}">
                    <div class="partner-circle w-20 h-20 md:w-24 md:h-24 bg-gradient-to-br {{ $partner['color'] }} rounded-full flex items-center justify-center text-white shadow-2xl cursor-pointer transition-all duration-500 group-hover:shadow-3xl group-hover:scale-110 relative overflow-hidden">
                        <i class="{{ $partner['logo'] }} text-xl md:text-2xl transition-transform duration-300 group-hover:scale-110"></i>
                        <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity duration-300 rounded-full"></div>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-white rounded-full animate-ping"></div>
                            <div class="absolute bottom-1/4 right-1/4 w-1 h-1 bg-white rounded-full animate-ping" style="animation-delay: 0.3s;"></div>
                        </div>
                    </div>
                    <div class="partner-card absolute top-full left-1/2 transform -translate-x-1/2 mt-4 w-64 bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:mt-6 transition-all duration-500 z-90 border border-gray-200 dark:border-gray-700">
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 border-8 border-transparent border-b-white dark:border-b-gray-800"></div>
                        
                        <div class="text-center">
                            <div class="w-12 h-12 bg-gradient-to-br {{ $partner['color'] }} rounded-xl flex items-center justify-center text-white mb-4 mx-auto">
                                <i class="{{ $partner['logo'] }}"></i>
                            </div>
                            
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-2">{{ $partner['name'] }}</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">{{ __('erp.partner_sector') }}: {{ $partner['sector'] }}</p>
                            
                            <div class="partner-stats flex justify-center space-x-4 text-xs">
                                <div class="stat-item">
                                    <div class="font-bold text-gray-800 dark:text-white">5+</div>
                                    <div class="text-gray-500 dark:text-gray-400">{{ __('erp.years') }}</div>
                                </div>
                                <div class="stat-item">
                                    <div class="font-bold text-gray-800 dark:text-white">A+</div>
                                    <div class="text-gray-500 dark:text-gray-400">{{ __('erp.rating') }}</div>
                                </div>
                            </div>
                            
                            <button class="partner-action-btn w-full mt-4 py-2 px-4 bg-gradient-to-r {{ $partner['color'] }} text-white rounded-lg font-semibold text-sm transition-all duration-300 hover:shadow-lg hover:scale-105 transform">
                                {{ __('erp.view_profile') }}
                            </button>
                        </div>
                        <div class="absolute -inset-1 bg-gradient-to-r {{ $partner['color'] }} rounded-2xl opacity-0 group-hover:opacity-10 -z-10 transition-opacity duration-500 blur-sm"></div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="absolute inset-0 pointer-events-none">
                <svg class="w-full h-full" viewBox="0 0 100 100">
                    @foreach(range(0, 7) as $i)
                    <line x1="50" y1="50" 
                           x2="{{ 50 + 35 * cos(deg2rad($i * 45)) }}" 
                           y2="{{ 50 + 35 * sin(deg2rad($i * 45)) }}" 
                           stroke="url(#partnerGradient{{ $i }})" 
                           stroke-width="0.3" 
                           stroke-dasharray="2 2"
                           class="animate-dash">
                        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="3s" repeatCount="indefinite" />
                    </line>
                    @endforeach
                    <defs>
                        @foreach(range(0, 7) as $i)
                        <linearGradient id="partnerGradient{{ $i }}" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" stop-color="#3b82f6" stop-opacity="0.4" />
                            <stop offset="100%" stop-color="#8b5cf6" stop-opacity="0.2" />
                        </linearGradient>
                        @endforeach
                    </defs>
                </svg>
            </div>
        </div>

    </div>
</section>

{{-- Vision, Mission, Goals Section --}}
<section id="vision" class="relative py-20 bg-gray-50 from-slate-50 to-white dark:from-gray-900 dark:to-slate-800 overflow-hidden">
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-0 left-0 w-72 h-72 bg-indigo-500/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-500/5 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-blue-500/3 rounded-full blur-2xl"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in-up">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">{{ __('erp.strategy_title') }}</h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">{{ __('erp.strategy_subtitle') }}</p>
        </div>
        <div class="strategy-tree relative">
            <div class="tree-trunk absolute left-1/2 top-0 bottom-0 w-2 bg-gradient-to-b from-indigo-500 to-purple-600 transform -translate-x-1/2 z-10 rounded-full"></div>
 
            <div class="relative z-20">
                @foreach([
                    ['icon' => 'fas fa-eye', 'title' => 'vision_title', 'desc' => 'vision_description', 
                     'position' => 'left', 'level' => 'top', 'color' => 'from-indigo-500 to-purple-600',
                     'features' => ['vision_feature1', 'vision_feature2', 'vision_feature3']],
                    
                    ['icon' => 'fas fa-bullseye', 'title' => 'mission_title', 'desc' => 'mission_description', 
                     'position' => 'right', 'level' => 'middle', 'color' => 'from-blue-500 to-cyan-600',
                     'features' => ['mission_feature1', 'mission_feature2', 'mission_feature3']],
                    
                    ['icon' => 'fas fa-flag', 'title' => 'goals_title', 'desc' => 'goals_description', 
                     'position' => 'left', 'level' => 'bottom', 'color' => 'from-green-500 to-emerald-600',
                     'features' => ['goals_feature1', 'goals_feature2', 'goals_feature3']],
                ] as $index => $item)
                <div class="strategy-item strategy-{{ $item['level'] }} strategy-{{ $item['position'] }} mb-12 group"
                     data-level="{{ $item['level'] }}"
                     data-position="{{ $item['position'] }}"> 
                    <div class="tree-branch absolute w-48 h-1 bg-gradient-to-r {{ $item['position'] == 'left' ? 'from-purple-500 to-indigo-500 right-0' : 'from-blue-500 to-cyan-500 left-0' }} transform {{ $item['position'] == 'left' ? 'translate-x-48' : '-translate-x-48' }} z-10 rounded-full"></div>
 
                    <div class="strategy-card relative bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-2xl border border-gray-200 dark:border-gray-700 transition-all duration-500 group-hover:shadow-3xl group-hover:-translate-y-2 max-w-md {{ $item['position'] == 'left' ? 'mr-auto' : 'ml-auto' }}">
 
                        <div class="strategy-marker absolute top-1/2 transform -translate-y-1/2 {{ $item['position'] == 'left' ? '-right-6' : '-left-6' }} w-12 h-12 bg-gradient-to-br {{ $item['color'] }} rounded-full flex items-center justify-center text-white shadow-lg z-20 group-hover:scale-110 transition-transform duration-300">
                            <i class="{{ $item['icon'] }} text-lg"></i>
                        </div> 
                        <div class="strategy-icon mb-6">
                            <div class="w-20 h-20 bg-gradient-to-br {{ $item['color'] }} rounded-2xl flex items-center justify-center text-white shadow-lg mx-auto transform group-hover:scale-110 group-hover:rotate-5 transition-all duration-500">
                                <i class="{{ $item['icon'] }} text-2xl"></i>
                            </div>
                        </div> 
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 text-center group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r {{ $item['color'] }} transition-all duration-300">
                            {{ __('erp.' . $item['title']) }}
                        </h3>
                        
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6 text-center">
                            {{ __('erp.' . $item['desc']) }}
                        </p> 
                        <div class="strategy-features space-y-3">
                            @foreach($item['features'] as $feature)
                            <div class="flex items-center text-sm text-gray-600 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300 transition-colors">
                                <div class="w-2 h-2 bg-gradient-to-r {{ $item['color'] }} rounded-full mr-3 group-hover:scale-150 transition-transform duration-300"></div>
                                <span>{{ __('erp.' . $feature) }}</span>
                            </div>
                            @endforeach
                        </div> 
                        <div class="absolute -inset-2 rounded-2xl bg-gradient-to-r {{ $item['color'] }} opacity-0 group-hover:opacity-5 transition-opacity duration-500 -z-10"></div>
                        <div class="absolute top-2 right-2 w-3 h-3 bg-gradient-to-r {{ $item['color'] }} rounded-full opacity-0 group-hover:opacity-100 animate-ping transition-opacity duration-500"></div>
                    </div> 
                    <div class="strategy-popup absolute top-1/2 transform -translate-y-1/2 {{ $item['position'] == 'left' ? 'right-full mr-8' : 'left-full ml-8' }} bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-2xl w-80 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-500 z-30 border border-gray-200 dark:border-gray-700">
 
                        <div class="absolute top-1/2 transform -translate-y-1/2 {{ $item['position'] == 'left' ? 'right-0 translate-x-1/2 border-8 border-transparent border-l-white dark:border-l-gray-800' : 'left-0 -translate-x-1/2 border-8 border-transparent border-r-white dark:border-r-gray-800' }}"></div>
                        
                        <div class="text-center">
                            <div class="w-12 h-12 bg-gradient-to-br {{ $item['color'] }} rounded-xl flex items-center justify-center text-white mb-4 mx-auto">
                                <i class="{{ $item['icon'] }}"></i>
                            </div>
                            
                            <h4 class="text-lg font-bold text-gray-800 dark:text-white mb-3">{{ __('erp.' . $item['title']) }}</h4>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-4 leading-relaxed">
                                {{ __('erp.' . $item['desc']) }}
                            </p>
                            
                            <div class="progress-indicators flex justify-between text-xs text-gray-500 dark:text-gray-400 mb-4">
                                <span>{{ __('erp.strategy_progress') }}</span>
                                <span class="font-bold text-gray-700 dark:text-gray-300">{{ 80 + $index * 10 }}%</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2 mb-4">
                                <div class="h-2 rounded-full bg-gradient-to-r {{ $item['color'] }} transition-all duration-1000 progress-bar-{{ $loop->iteration }}"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> 
            <div class="tree-roots absolute bottom-0 left-1/2 transform -translate-x-1/2 flex space-x-4">
                @foreach(['from-indigo-400 to-purple-500', 'from-blue-400 to-cyan-500', 'from-green-400 to-emerald-500'] as $rootColor)
                <div class="w-8 h-16 bg-gradient-to-b {{ $rootColor }} rounded-t-full opacity-60"></div>
                @endforeach
            </div>
        </div>

    </div>
</section>

{{-- Stats Section --}}
<section id="stats" class="section bg-primary-800">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800">{{ __('erp.stats_title') }}</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
            ['icon' => 'fas fa-briefcase', 'value' => '500+', 'label' => 'stats_projects'],
            ['icon' => 'fas fa-users', 'value' => '50+', 'label' => 'stats_partners'],
            ['icon' => 'fas fa-heart', 'value' => '100+', 'label' => 'stats_clients'],
            ['icon' => 'fas fa-award', 'value' => '5+', 'label' => 'stats_experience'],
            ] as $st)
            <div class="stat-card">
                <div class="mb-3">
                    <i class="{{ $st['icon'] }} text-3xl"></i>
                </div>
                <div class="text-2xl font-bold">{{ $st['value'] }}</div>
                <div class="mt-1">{{ __('erp.' . $st['label']) }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- contact Section --}}
<section id="contact" class="section bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto modern-card p-8 md:p-12">
            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800 dark:text-white">{{ __('erp.contact_title') }}</h2>
                <p class="text-gray-600 dark:text-gray-300">{{ __('erp.contact_subtitle') }}</p>
            </div>
            <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 dark:text-gray-300 mb-2 font-medium">{{ __('erp.full_name') }}</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-indigo-200 dark:focus:ring-indigo-600 focus:border-indigo-500 outline-none transition bg-white dark:bg-gray-800 text-gray-800 dark:text-white placeholder-gray-500 dark:placeholder-gray-400">
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 dark:text-gray-300 mb-2 font-medium">{{ __('erp.email') }}</label>
                        <input type="email" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-indigo-200 dark:focus:ring-indigo-600 focus:border-indigo-500 outline-none transition bg-white dark:bg-gray-800 text-gray-800 dark:text-white placeholder-gray-500 dark:placeholder-gray-400">
                    </div>
                </div>
                <div>
                    <label class="block text-gray-700 dark:text-gray-300 mb-2 font-medium">{{ __('erp.subject') }}</label>
                    <input type="text" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-indigo-200 dark:focus:ring-indigo-600 focus:border-indigo-500 outline-none transition bg-white dark:bg-gray-800 text-gray-800 dark:text-white placeholder-gray-500 dark:placeholder-gray-400">
                </div>
                
                <div>
                    <label class="block text-gray-700 dark:text-gray-300 mb-2 font-medium">{{ __('erp.message') }}</label>
                    <textarea rows="5" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-indigo-200 dark:focus:ring-indigo-600 focus:border-indigo-500 outline-none transition bg-white dark:bg-gray-800 text-gray-800 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 resize-none"></textarea>
                </div>
                <button type="submit" class="btn-modern w-full hover:scale-105 transition-transform duration-200">
                    <i class="fas fa-paper-plane ml-2"></i>
                    {{ __('erp.send_message') }}
                </button>
            </form>
            <div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-700">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-full flex items-center justify-center mb-3">
                            <i class="fas fa-phone text-indigo-600 dark:text-indigo-400"></i>
                        </div>
                        <h3 class="font-semibold text-gray-800 dark:text-white mb-1">{{ __('erp.phone') }}</h3>
                        <p class="text-gray-600 dark:text-gray-300">+967771231316</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-full flex items-center justify-center mb-3">
                            <i class="fas fa-envelope text-indigo-600 dark:text-indigo-400"></i>
                        </div>
                        <h3 class="font-semibold text-gray-800 dark:text-white mb-1">{{ __('erp.email') }}</h3>
                        <p class="text-gray-600 dark:text-gray-300">info@erp-system.com</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-full flex items-center justify-center mb-3">
                            <i class="fas fa-map-marker-alt text-indigo-600 dark:text-indigo-400"></i>
                        </div>
                        <h3 class="font-semibold text-gray-800 dark:text-white mb-1">{{ __('erp.location') }}</h3>
                        <p class="text-gray-600 dark:text-gray-300">{{ __('erp.company_address') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection