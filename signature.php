<?php include ('includes/header.php'); ?>

<div class="interior-header">
        <h1 class="left">Confirmation</h1>
        <img src="assets/imgs/rt-logo_small.png" class="right">
    <div class="clear"></div>
</div>

<div class="clear"></div>
<div class="details">
    <h3>Details</h3>
    <div class="row">
        <div class="six cols">
            <p>Details here!</p>
        </div>
        <div class="six cols">
            <p>Details here!</p>
        </div>

    </div>

    <h3>Waiver of Liability</h3>
    <p class="justify">In consideration of the opportunity afforded me to assist on a voluntary basis with Rebuilding Together Pittsburgh, a project in which the homes of disadvantaged persons will be repaired by volunteers, and in light of the aims and purposes of the community service provided by Rebuilding Together Pittsburgh in organizing this project from which any liability may or could accrue against Rebuilding Together Pittsburgh, or any of their respective officers and directors collectively or individually or any project homeowners. Without limiting the generality of the foregoing, I agree that this waiver and release shall include any rights, claims, or causes of action resulting from personal injury to me or damage to my property sustained in connection with any activities in a Rebuilding Together Pittsburgh event or project.</p>

    <h3>Media Release</h3>
    <p class="justify">I understand that photographs and/or videotapes may be taken of me during workday. I hereby assign and authorize Rebuilding Together Pittsburgh to use these photographs and/or videotapes for publicity purposes. I, therefore, release and discharge all parties associated with Rebuilding Together Pittsburgh, its agents, servants, and employees from any liability, which may arise now or in the future or develop from such activity as described.</p>
</div>

<h2>Your Signature</h2>
<p>By signing below, you confirm that your details listed above are accurate. You also accept our Waiver of Liability and Media Release terms.</p>

<div id="signature-pad" class="signature-pad-box">
    <div class="signature-pad-body">
        <canvas></canvas>
    </div>
<div class="signature-pad-footer">
    <button data-action="clear">Clear</button>
    <button data-action="save">Save</button>
    <form name="signaturepad" action="capture-signature.php" method="POST">
        <input type="hidden" id="signature-b64" name="signature-b64" value=""></input>
    </form>
</div>
</div>

<script src="assets/js/signature_pad.js"></script>
<script type="text/javascript">
var wrapper = document.getElementById("signature-pad"),
    clearButton = wrapper.querySelector("[data-action=clear]"),
    saveButton = wrapper.querySelector("[data-action=save]"),
    canvas = wrapper.querySelector("canvas"),
    signaturePad;

function resizeCanvas() {
    var ratio =  window.devicePixelRatio || 1;
    canvas.width = canvas.offsetWidth * ratio;
    canvas.height = canvas.offsetHeight * ratio;
    canvas.getContext("2d").scale(ratio, ratio);
}

window.onresize = resizeCanvas;
resizeCanvas();

signaturePad = new SignaturePad(canvas);

clearButton.addEventListener("click", function (event) {
    signaturePad.clear();
});

saveButton.addEventListener("click", function (event) {
    if (signaturePad.isEmpty()) {
        alert("Signature is required!");
    } else {
        var siginput = document.getElementById('signature-b64');
        siginput.setAttribute('value', signaturePad.toDataURL());
        document.signaturepad.submit();
    }
});


</script>

<?php include ('includes/footer.php'); ?>
