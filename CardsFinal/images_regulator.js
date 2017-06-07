if (document.images) {
stoneage_B1_off = new Image(); stoneage_B1_off.src = "Img/stoneage_B1.gif"
stoneage_B1_over = new Image(); stoneage_B1_over.src = "Img/stoneage_B1_over.gif"
stoneage_B2_off = new Image(); stoneage_B2_off.src = "Img/stoneage_B2.gif"
stoneage_B2_over = new Image(); stoneage_B2_over.src = "Img/stoneage_B2_over.gif"
stoneage_B3_off = new Image(); stoneage_B3_off.src = "Img/stoneage_B3.gif"
stoneage_B3_over = new Image(); stoneage_B3_over.src = "Img/stoneage_B3_over.gif"
stoneage_B4_off = new Image(); stoneage_B4_off.src = "Img/stoneage_B4.gif"
stoneage_B4_over = new Image(); stoneage_B4_over.src = "Img/stoneage_B4_over.gif"
stoneage_B5_off = new Image(); stoneage_B5_off.src = "Img/stoneage_B5.gif"
stoneage_B5_over = new Image(); stoneage_B5_over.src = "Img/stoneage_B5_over.gif"
stoneage_B6_off = new Image(); stoneage_B6_off.src = "Img/stoneage_B6.gif"
stoneage_B6_over = new Image(); stoneage_B6_over.src = "Img/stoneage_B6_over.gif"
stoneage_B7_off = new Image(); stoneage_B7_off.src = "Img/stoneage_B7.gif"
stoneage_B7_over = new Image(); stoneage_B7_over.src = "Img/stoneage_B7_over.gif"
stoneage_B8_off = new Image(); stoneage_B8_off.src = "Img/stoneage_B8.gif"
stoneage_B8_over = new Image(); stoneage_B8_over.src = "Img/stoneage_B8_over.gif"
}

function turn_off(ImageName) {
	if (document.images != null) {
		document[ImageName].src = eval(ImageName + "_off.src");
	}
}

function turn_over(ImageName) {
	if (document.images != null) {
		document[ImageName].src = eval(ImageName + "_over.src");
	}
}