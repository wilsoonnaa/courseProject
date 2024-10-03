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
                                  What are the steps to&nbsp;completing a&nbsp;successful animation? Obviously, it&nbsp;takes a&nbsp;lot of&nbsp;time, skill, planning, and plain expertise. The animation pipeline is&nbsp;a&nbsp;detailed game plan for your project. When considering the &lsquo;animation pipeline&rsquo;, you should have a&nbsp;good idea as&nbsp;to&nbsp;what step of&nbsp;your project you&rsquo;re on.
                                  </p>
                                  </div>
                                </div>
                                <div class="tab">
                                    <input type="checkbox" name="accordion-1" id="cb3">
                                    <label for="cb3" class="tab__label">Modeling</label>
                                    <div class="tab__content">
                                      <p>Using <code>&lt;input type="checkbox"&gt;</code> allows to have several tabs open at the same time.</p>
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
                                      <p>Using <code>&lt;input type="checkbox"&gt;</code> allows to have several tabs open at the same time.</p>
                                    </div>
                                  </div>
                                  <div class="tab">
                                    <input type="checkbox" name="accordion-1" id="cb6">
                                    <label for="cb6" class="tab__label">Graphics Programming</label>
                                    <div class="tab__content">
                                      <p>Using <code>&lt;input type="checkbox"&gt;</code> allows to have several tabs open at the same time.</p>
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