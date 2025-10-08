<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'Poco X7 Pro — Power Meets Style',

            'Subtitle' => 'Experience blazing-fast performance, stunning display, and long-lasting battery life all packed in a sleek design.',

            'profile_image' => 'https://m-cdn.phonearena.com/images/article/166489-wide-two_1200/Poco-X7-and-Poco-X7-Pro-officially-introduced-alongside-Iron-Man-Edition.jpg?1736447456',

            'about' => ['CPU: MediaTek Dimensity 8400',
            'RAM: 8/12GB',
            'STORAGE: 256/512GB',
            'DISPLAY: 6.67" 1220P AMOLED 120Hz',
            'CAMERA: 50 + 8 MP rear / 20 MP front',
            'OS: Android 15, HyperOS 2',
            'BATTERY: 6000mAh 90W'
            ],



        ];

        return view('portfolio.index', compact('portfolio'));

    }

    public function about()

    {

        
        $portfolio = [
            'summary' => [
                'The POCO X7 Pro is a mid-range smartphone that runs Android 15 and HyperOS 2 and is powered by MediaTek Dimensity 8400 Ultra CPU and Mali-G720 GPU.',
                'The gadget has 8GB and 12GB of RAM and 256GB and 512GB of internal storage.',
                'It comes with a 50 + 8MP rear camera setup and a 20MP selfie camera. The display is a 6.67 inches AMOLED with resolution of 1220 x 2712 pixels.',
                'The POCO X7 Pro also supports dual nano-SIM. It is fueled by a 6000mAh battery and 90W of wired charging. Sensors include a fingerprint sensor, accelerometer, etc.',
            ],

            'specs' => [
                'Processor' => [
                    'Chipset MediaTek Dimensity 8400 Ultra',
                    'Cores 8 cores',
                    'CPU 1×3.25 GHz Cortex-A725 & 3×3.0 GHz Cortex-A725 & 4×2.1 GHz Cortex-A725',
                    'GPU Mali-G720'
                ],
                'Display' => [
                    'Type AMOLED',
                    'Size 6.67 inches',
                    'Resolution 1220 x 2712 pixels',
                    'Refresh Rate 120 Hz',
                    'Pixel per inch 446',
                ],
                'Memory' => [
                    'RAM 8/12 GB',
                    'ROM 256/512GB',
                    'microSD card No',
                ],
                'Camera' => [
                    'Main Camera',
                    '50 MP, f/1.5, 26mm (wide), 1/1.95", 0.8μm, PDAF, OIS',
                    '8 MP, f/2.2, 15mm (ultrawide), 1/4.0", 1.12μm',
                    'LED flash, HDR, panorama',
                    'Video 4K@30/60fps, 1080p, gyro-EIS, OIS',
                    '',
                    'Selfie Camera',
                    '20 MP, f/2.2, 25mm (wide), 1/4.0", 0.7μm',
                    'Video Yes',
                ],
            ],
                'additional_specs' => [
                'Audio' => [
                    "Stereo speakers",
                    "USB-C audio port",
                    "Hi-Res"
                ],
                'Battery & Charging' => [
                    "Type SiC",
                    "Capacity 6000 mAh",
                    "Charging 90 W wired"
                ],
                'Cellular & Wireless' => [
                    "Network 5G",
                    "SIM Dual nano-SIM",
                    "WLAN Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, Wi-Fi Direct",
                    "Bluetooth 5.4, A2DP, LE, aptX HD",
                    "GPS GPS (L1+L5), GLONASS (G1), BDS (B1I+B1c+B2a), GALILEO (E1+E5a), QZSS (L1+L5), NavIC (L5)",
                    "NFC Yes, region dependent",
                    "Radio",
                    "USB USB Type-C 2.0, OTG"
                ],
                'Size & Weight' => [
                    "Weight 195 or 198 g",
                    "Size 160.75 x 75.24 x 8.29 or 8.43"
                ],
                'Material' => [
                    "IP68 dust and water resistance",
                    "Corning Gorilla Glass 7i"
                ],
                'Sensors' => [
                    "Fingerprint (under display, optical), accelerometer, gyro, proximity, compass"
                ],
                'OS' => [
                    "Android 15, HyperOS 2"
                ],
                'Colors' => [
                    "Black, Green, Yellow, Iron Man Edition"
                ]
            ]
        ];

        return view('portfolio.about', compact('portfolio'));
    }

    public function feedback()

    {
        $testimonials = [
            [
                'name' => 'John Doe',
                'position' => 'Tech Enthusiast',
                'photo' => 'https://randomuser.me/api/portraits/men/32.jpg',
                'message' => 'The Poco X7 Pro delivers incredible performance for the price. The display is stunning, and the battery lasts all day!'
            ],
            [
                'name' => 'Jane Smith',
                'position' => 'Mobile Reviewer',
                'photo' => 'https://randomuser.me/api/portraits/women/44.jpg',
                'message' => 'I love how sleek and stylish this phone looks. The camera quality exceeded my expectations, especially in low light.'
            ],
            [
                'name' => 'Michael Brown',
                'position' => 'Software Developer',
                'photo' => 'https://randomuser.me/api/portraits/men/56.jpg',
                'message' => 'The Poco X7 Pro is perfect for gaming and multitasking. The 120Hz AMOLED screen is buttery smooth!'
            ],
        ];

        return view('portfolio.feedback', compact('testimonials'));
    }

    public function contact()
    {
        // Just show the contact form
        return view('portfolio.contact');
    }

    public function submitContact(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'message' => 'required|string|min:10',
        ]);

        // Here, handle the order request — e.g., save to DB or send email
        // For now, let's just simulate success.

        // You could do: Order::create($validated); or Mail::to(...)->send(new OrderRequest($validated));

        return redirect()->route('portfolio.contact')->with('success', 'Thank you for your order request! We will get back to you soon.');
    }


}