@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: rgb(224, 222, 222);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #202020;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: rgb(159, 159, 182);
        }

        h2 {
            text-align: center;
            background-color: gray;
            padding: 20px;
        }

        .m-video {
            display: flex;
            justify-content: space-between;

        }

        .img {
            display: flex;
        }
    </style>
    <title>Weight Gain Routine</title>
</head>

<body>

    <h2>Weight Gain Routine</h2>

    <table>
        <thead>
            <tr>
                <th>Day</th>
                <th>Meal 1</th>
                <th>Snack 1</th>
                <th>Meal 2</th>
                <th>Snack 2</th>
                <th>Meal 3</th>
                <th>Snack 3</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sunday</td>
                <td>Bagel with cream cheese and smoked salmon</td>
                <td>Apple slices with peanut butter</td>
                <td>Beef and vegetable stir-fry</td>
                <td>Greek yogurt with granola</td>
                <td>Baked chicken with sweet potatoes</td>
                <td>Trail mix with dried fruits</td>
            </tr>
            <tr>
                <td>Monday</td>
                <td>Scrambled eggs with avocado</td>
                <td>Greek yogurt with granola</td>
                <td>Grilled chicken with quinoa</td>
                <td>Nut and dried fruit mix</td>
                <td>Salmon with sweet potatoes</td>
                <td>Smoothie with banana, milk, and peanut butter</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>Oatmeal with almond butter</td>
                <td>Cottage cheese with pineapple</td>
                <td>Turkey and cheese sandwich</td>
                <td>Handful of almonds</td>
                <td>Stir-fried tofu with rice</td>
                <td>Apple slices with cheese</td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td>Whole grain pancakes with berries</td>
                <td>Trail mix with nuts</td>
                <td>Lentil soup with whole grain roll</td>
                <td>Greek yogurt with honey</td>
                <td>Beef stir-fry with broccoli</td>
                <td>Hummus with carrot sticks</td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td>Breakfast burrito with beans and cheese</td>
                <td>Mixed nuts</td>
                <td>Chicken and vegetable wrap</td>
                <td>Chocolate protein shake</td>
                <td>Baked cod with quinoa</td>
                <td>Granola bar with yogurt</td>
            </tr>
            <tr>
                <td>Friday</td>
                <td>Peanut butter toast with banana</td>
                <td>Cheese and crackers</td>
                <td>Spinach and feta omelet</td>
                <td>Avocado and tuna salad</td>
                <td>Beef and vegetable stir-fry</td>
                <td>Mango slices with cottage cheese</td>
            </tr>
            <tr>
                <td>Saturday</td>
                <td>Smoothie with berries, yogurt, and protein powder</td>
                <td>Granola bar</td>
                <td>Grilled cheese sandwich</td>
                <td>Mixed nuts and dried fruits</td>
                <td>Quinoa salad with chickpeas</td>
                <td>Dark chocolate with almonds</td>
            </tr>

        </tbody>
    </table>

    <h2> Weight Loss Routine</h2>

    <table>
        <thead>
            <tr>
                <th>Day</th>
                <th>Meal 1</th>
                <th>Snack 1</th>
                <th>Meal 2</th>
                <th>Snack 2</th>
                <th>Meal 3</th>
                <th>Snack 3</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sunday</td>
                <td>Oatmeal with sliced banana and a sprinkle of cinnamon</td>
                <td>Carrot and cucumber sticks with hummus</td>
                <td>Grilled vegetable and quinoa salad</td>
                <td>Greek yogurt with honey</td>
                <td>Chicken and broccoli foil packets</td>
                <td>Green tea with a small handful of almonds</td>
            </tr>
            <tr>
                <td>Monday</td>
                <td>Vegetable omelet with whole grain toast</td>
                <td>Greek yogurt with berries</td>
                <td>Grilled chicken salad with vinaigrette</td>
                <td>Cucumber and carrot sticks with hummus</td>
                <td>Baked fish with steamed broccoli</td>
                <td>Green tea with a handful of almonds</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>Smoothie with spinach, banana, and protein powder</td>
                <td>Apple slices with almond butter</td>
                <td>Quinoa bowl with mixed vegetables</td>
                <td>Yogurt parfait with granola</td>
                <td>Grilled turkey with roasted sweet potatoes</td>
                <td>Vegetable soup with a small whole grain roll</td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td>Greek yogurt with chia seeds and mixed fruits</td>
                <td>Handful of walnuts</td>
                <td>Spinach and feta stuffed chicken breast</td>
                <td>Rice cake with cottage cheese</td>
                <td>Salmon and asparagus foil packets</td>
                <td>Vegetable and lentil soup</td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td>Whole grain cereal with milk</td>
                <td>Orange slices</td>
                <td>Caprese salad with balsamic glaze</td>
                <td>Carrot and celery sticks with tzatziki</td>
                <td>Turkey and vegetable stir-fry</td>
                <td>Green tea with a small handful of pistachios</td>
            </tr>
            <tr>
                <td>Friday</td>
                <td>Avocado toast with poached eggs</td>
                <td>Mixed berries with cottage cheese</td>
                <td>Shrimp and vegetable skewers</td>
                <td>Yogurt with sliced kiwi</td>
                <td>Baked chicken with quinoa</td>
                <td>Vegetable and bean chili</td>
            </tr>
            <tr>
                <td>Saturday</td>
                <td>Whole wheat pancakes with berries</td>
                <td>Trail mix with unsalted nuts</td>
                <td>Vegetable and tofu stir-fry</td>
                <td>Whole grain crackers with guacamole</td>
                <td>Baked cod with lemon and herbs</td>
                <td>Minestrone soup with a side of mixed berries</td>
            </tr>

        </tbody>
    </table>
    <h4>Here, you can watch the tutorial for nutrition guide with professional</h4>
    <div class="m-video">

        <iframe width="650" height="403" src="https://www.youtube.com/embed/2LNxTZzu2rY" title="Weight Gain Diet For Beginners | Full Day Diet Plan | Yatinder Singh" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

        <iframe width="650" height="403" src="https://www.youtube.com/embed/ahnl7GaV_rU" title="Doctor explains INTERMITTENT FASTING for weight loss + METHODS and 10 FOODS TO EAT AND AVOID!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <h2>Here are the sources of foods high in protein</h2>
    <div class="img">
        <img src="https://i.etsystatic.com/37824016/r/il/971513/4241004015/il_570xN.4241004015_dii3.jpg" height="50%" width="50%">
        <img src="https://www.eatingwell.com/thmb/fr8YRsFof8za4G2K5MC4E7JXEAA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/vegetarian-protein-infographic-square1-a1471d923dc247bba76f09a2a82c24b3.jpg" height="50%" width="50%">
    </div>
</body>

</html>
@endsection