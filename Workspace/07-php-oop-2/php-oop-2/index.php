<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimalCommerce</title>

    <?php 
    
        require_once(__DIR__ . "/db.php"); 

        try {

            $test_prod = new Product(
                10, "Te", "https://shop-cdn-m.mediazs.com/bilder/9/400/26635_pla_meradog_puppyknochen_10kg_9.jpg", 50, 20, $cat_cat, "10/05/2024"
            );
        } catch (Exception $e) {

            echo "Impossibile creare prodotto di test: " . $e -> getMessage();
        }

        die();
    
    ?>
</head>
<body>
    
    <ul>
        <?php
            foreach ($prods as $prod) {
                
                ?>

                    <li>
                        <h3>
                            <?php
                                echo $prod -> getTypology();
                            ?>
                        </h3>
                        <?php
                            echo $prod -> getTitle();
                        ?>: 
                        <?php
                            echo $prod -> getPrice();
                        ?>
                        Euro
                        <br>
                        <img src="<?php echo $prod -> getImage() ?>"  width="100" />
                        <br>
                        Category:
                        <img src="<?php echo $prod -> getCategory() -> getIcon() ?>"  width="30" />
                        <?php
                            echo $prod -> getCategory() -> getName();
                        ?>
                    </li>

                <?php
            }
        ?>
    </ul>
</body>
</html>