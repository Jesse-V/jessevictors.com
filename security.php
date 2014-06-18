<?php //opening HTML
   $_TITLE_ = "Security";
   $_STYLESHEETS_ = array("css/security.css");
   require_once('common/header.php');
?>

   <div class="dhm illustration">
       <img src="images/DH-key-exchange.png" alt="Diffie-Hellman-Merkle cryptographic key exchange"/>
       <div class="caption">Graphical illustration of a clever procedure called the Diffie-Hellman-Merkle key exchange. It allows any two parties to come to an agreement on an encryption key, even over a wiretapped line. Interestingly, the secrets are chosen every time and then forgotten afterwards, so recorded conversations cannot be decrypted at a later point, a phenomenon called perfect forward secrecy. Combined with RSA authentication and digital signatures, it underpins all modern security for all major websites. The last few years there's been a move to replace the underlying mathematics with elliptic-curve cryptography, but the general algorithm remains.</div>
    </div>
    <p>
      Over the years there have been many things that have caught my eye.
      The security field has really exploded over the last twelve months in wake of the revelations that government agencies are spying on its citizens, and not just in the United States. More than that, computers -- a powerful supplement of the human brain -- will almost certainly continue to increase in popularly and an ever-growing volume information is continually being stored on them. As this growth continues, so does the attack surface and incentive for miscreants to steal information. Those who can help defend systems against these users are valuable and are an essential part of any business.
   </p>

<?php
   $_JS_ = array();
   require_once('common/footer.php'); //closing HTML
?>






