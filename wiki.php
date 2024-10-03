<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCAR3D: The portal for everything 3d.</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <div id="container">
    <?php include 'navbar.php'; ?>
    
        <div class="scnd-container">
            <main>
                <div class="content">
                    <div class="info">
                    <div class="breadcrumbs">
                            <span>/ <a href="wiki.php">WIKI</a> /</span>
                        </div>
                        <h1>WIKI</h1>
                    </div>
                    <div class="blocks">
                        <div class="article2">
                            <section class="accordion">
                                <div class="tab">
                                  <input type="checkbox" name="accordion-1" id="cb2">
                                  <label for="cb2" class="tab__label">Animation</label>
                                  <div class="tab__content">
                                  <p>
                                  Learning videogame animation requires a combination of artistic skill, technical knowledge, and practice. Aspiring animators should start by mastering the principles of traditional animation, such as timing, spacing, and squash and stretch. These fundamentals apply to both 2D and 3D animation. Online courses, tutorials, and animation bootcamps can provide structured learning paths. It's crucial to build a strong portfolio showcasing various animation styles and techniques. Collaborating on indie game projects or participating in game jams can provide valuable hands-on experience and help build a network within the industry.
                                  </p>
                                  <p>
                                  The videogame industry utilizes a variety of software tools for animation. Autodesk Maya is widely used for 3D modeling, animation, and rendering, particularly in larger studios. Blender, an open-source 3D creation suite, has gained popularity for its versatility and accessibility. For 2D animation, tools like Adobe Animate (formerly Flash) and Spine are commonly used. Other software includes 3ds Max for 3D modeling and animation, MotionBuilder for motion capture data manipulation, and ZBrush for digital sculpting and painting. Game engines like Unity and Unreal Engine also offer built-in animation tools, allowing animators to work directly within the game development environment.
                                  </p>
                                  </div>
                                </div>
                                <div class="tab">
                                    <input type="checkbox" name="accordion-1" id="cb3">
                                    <label for="cb3" class="tab__label">Modeling</label>
                                    <div class="tab__content">
                                      <p>The videogame industry employs a diverse range of software tools for 3D modeling, each with its unique strengths. For character creation and animation, Autodesk Maya is a go-to choice in many major studios due to its robust feature set and seamless pipeline integration. Blender, an open-source alternative, has gained traction for its versatility and cost-effectiveness. Environmental and architectural modeling often relies on 3ds Max, known for its powerful modeling capabilities. For intricate detailing and organic sculpting, ZBrush is the preferred tool among many artists. Specialized software like Substance Painter handles texturing and material creation, while Houdini excels in procedural modeling and visual effects. Increasingly, game engines such as Unreal Engine and Unity are incorporating advanced modeling and texturing tools, allowing artists to work directly within the game development environment. The selection of software typically depends on project requirements, studio preferences, and individual artist expertise.</p>
                                    </div>
                                  </div>
                                  <div class="tab">
                                    <input type="checkbox" name="accordion-1" id="cb4">
                                    <label for="cb4" class="tab__label">Character Art</label>
                                    <div class="tab__content">
                                        <p>Characters for games are usually created as a group effort, involving an Art Director, Concept Artists, Character Artists, Technical Artists, Animators, and Effects Artists (usually in this order). The number of artists depends on the size of the art team: the team can be tens of people, or sometimes it is all accomplished by one person.<br><br>

                                            Characters are first designed as concepts, sculpted to create form and details, re-topology modeled for in-game use, textured and shaded to create color and surface materials, rigged to a skeleton, animated to move and act, and special effects are added.<br><br>
                                            
                                            Concept art is almost always used as the starting point because it's a more loose, fast, and efficient way to iterate and find the best character design than using 3D.<br><br>
                                            
                                            For most modern game characters, a high poly model is first created using a combination of modeling and digital sculpting software. These high resolution models are later re-topologized into the game resolution or low poly model.<br><br>
                                            
                                            The surface details from the high poly model are transferred to the in-game model using textures and Shaders though a process called baking. This baking process can generate a variety of texture maps that help fool the eye into believing the in-game model has more modeled detail than it actually has. The most common of these texture maps are Normal map, and AmbientOcclusionMap.<br><br>
                                            
                                            Typical character art process:<br><br>
                                            
                                            1. Build a blockout model.<br>
                                            2. Do a rough sculpt.<br>
                                            3. Do a final sculpt.<br>
                                            4. Polypaint.<br>
                                            5. Retopo to create the final low-poly model.<br>
                                            6. Unwrap the UVs.<br>
                                            7. Set up an exploded bake if needed.<br>
                                            8. If the engine is poorly synced, need to rely on convoluted smoothing groups techniques to compensate.<br>
                                            9. If the budget is too tight, need to rely on painful edited cage setups.<br>
                                            10. Bake it, meaning that one has to know about a whole lot of different texture passes.<br>
                                            11. OS to TS conversion in some cases.<br>
                                            12. Set up a master PSD file with all the texture passes as groups.<br>
                                            13. Use the QuickSaveMaps script for Photoshop to save all maps at once.<br>
                                            14. Texturing (either in Photoshop only, or using 3DCoat or Substance Painter, or using DDO or Substance Designer), in PBR fashion or not.<br>
                                            15. Export and refine in-engine or Marmoset.</p>
                                    </div>
                                  </div>
                                  <div class="tab">
                                    <input type="checkbox" name="accordion-1" id="cb5">
                                    <label for="cb5" class="tab__label">Environment Art</label>
                                    <div class="tab__content">
                                      <p>Environment art in video games differs from general modeling in its focus on creating immersive, interactive spaces that tell a story and support gameplay. While general modeling may involve creating individual objects or characters, environment artists are responsible for designing and constructing entire virtual worlds. This includes not only the visible elements like landscapes, buildings, and props, but also the overall mood, atmosphere, and visual narrative of the game. Environment artists must consider factors such as level design, player navigation, and performance optimization, ensuring that their creations not only look stunning but also function well within the game engine.</p>
                                      <p>The process of creating environment art typically begins with concept art and rough sketches. Environment artists then use a combination of 3D modeling software, digital sculpting tools, and texturing applications to bring these concepts to life. Popular software for environment art includes Autodesk Maya or 3ds Max for base modeling, ZBrush for detailed sculpting, and Substance Painter for texturing. Many artists also work directly within game engines like Unreal Engine or Unity, using their built-in landscape tools and material editors. Additionally, specialized software such as SpeedTree for vegetation creation or World Machine for terrain generation are often employed. The artist must balance visual fidelity with performance considerations, often using techniques like level of detail (LOD) modeling and texture atlasing to optimize their creations for smooth gameplay.</p>
                                    </div>
                                  </div>
                                  <div class="tab">
                                    <input type="checkbox" name="accordion-1" id="cb6">
                                    <label for="cb6" class="tab__label">Graphics Programming</label>
                                    <div class="tab__content">
                                      <p>Graphics programming is a specialized field within game development that focuses on creating and optimizing the visual elements of a video game. It involves writing code to render 2D and 3D graphics, implement lighting and shading effects, manage textures, and create complex visual systems like particle effects or procedural generation. Graphics programmers work closely with artists and designers to bring their visual concepts to life while ensuring optimal performance across various hardware configurations. This field requires a deep understanding of computer science principles, mathematics (particularly linear algebra and trigonometry), and the intricacies of how computer hardware processes graphical data.</p>
                                      <p>Several popular graphics APIs (Application Programming Interfaces) are used in video game development to facilitate communication between the game software and the graphics hardware. OpenGL, developed by the Khronos Group, is a widely-used, cross-platform API that supports both 2D and 3D graphics. Microsoft's DirectX, particularly its Direct3D component, is another major player, especially for Windows and Xbox platforms. Vulkan, a more recent API also developed by the Khronos Group, offers low-overhead, high-performance graphics capabilities and is gaining popularity in modern game development. For mobile platforms, APIs like Metal (for iOS) and OpenGL ES (for Android) are commonly used. Each of these APIs offers different advantages in terms of performance, cross-platform compatibility, and ease of use, allowing developers to choose the best tool for their specific project requirements.</p>
                                    </div>
                                  </div>
                            </section>
                        </div>
                        <?php include 'sidebar.php'; ?>
                    </div>
                </div>
            </main>
        
            <?php include 'footer.php'; ?>
        </div>
    
    </div>
</body>
</html>