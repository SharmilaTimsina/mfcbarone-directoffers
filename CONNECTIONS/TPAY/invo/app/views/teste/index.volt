<style>
    pre code{font-size: 8px!important;}
</style>

<div class="page-header">
	VOLT.PHP
    <b>TestRequests - Requests disponiveis na TPay developers:</b><br>
    <div style='text-align: center;'>
    .::AddSubscriptionContractRequest::.               
    .::VerifySubscriptionContract::.
    .::ConfirmDirectPaymentTransaction::.
    .::SendSubscriptionContractVerificationSMS::.
    .::SuspendSubscriptionContractRequest::.
    .::PurgeSubscriptionContractRequest::.
    .::CancelSubscriptionContractRequest::.
    .::SubscriptionCharging::.
    .::GetSubscriptionContracts::.
    .::SkipBill::.
    .::SendSubscriptionCancellationPinSMS::.
    .::VerifySubscriptionCancellationPin::.
    .::HeaderEnrichment::.
    .::UpdateTransactionStatus::.
    .::SendFreeMTMessage::.
    </div>
</div>
<div class="panel-body">
    <div class="col-lg-6">
        <?php 
        echo $this->tag->form("teste/addsubscriptioncontractrequest"); 
        ?>
            <p><?php echo $this->tag->submitButton("AddsubScriptionContractRequest"); ?></p>
        </form>
		<?php echo $this->tag->form("teste/verifysubscriptioncontract"); 
        ?>
            <p><?php echo $this->tag->submitButton("VerifySubscriptionContract"); ?></p>
        </form>
        <?php 
        echo $this->tag->form("teste/confirmdirectpaymenttransaction"); 
        ?>  
            <p><?php echo $this->tag->submitButton("ConfirmDirectPaymentTransaction"); ?></p>
        </form>
        <?php 
        echo $this->tag->form("teste/sendsubscriptioncontractverificationsms"); 
        ?>
            <p><?php echo $this->tag->submitButton("SendSubscriptionContractVerificationSMS"); ?></p>
        </form>
        <?php
        echo $this->tag->form("teste/suspendsubscriptioncontractrequest"); 
        ?>
            <p><?php echo $this->tag->submitButton("SuspendSubscriptionContractRequest"); ?></p>
        </form>
        <?php
        echo $this->tag->form("teste/purgesubscriptioncontractrequest"); 
        ?>
            <p><?php echo $this->tag->submitButton("PurgeSubscriptionContractRequest"); ?></p>
        </form>
        <?php
        echo $this->tag->form("teste/cancelsubscriptioncontractrequest"); 
        ?>
            <p><?php echo $this->tag->submitButton("CancelSubscriptionContractRequest"); ?></p>
        </form>
    </div>
        <div class="col-lg-6">
        <?php 
        echo $this->tag->form("teste/subscriptioncharging"); 
        ?>
            <p><?php echo $this->tag->submitButton("SubscriptionCharging"); ?></p>
        </form>
        <?php 
        echo $this->tag->form("teste/getsubscriptioncontracts"); 
        ?>
            <p><?php echo $this->tag->submitButton("GetSubscriptionContracts"); ?></p>
        </form>
        <?php 
        echo $this->tag->form("teste/skipbill"); 
        ?>  
            <p><?php echo $this->tag->submitButton("SkipBill"); ?></p>
        </form>
        <?php 
        echo $this->tag->form("teste/sendsubscriptioncancellationpinsms"); 
        ?>
            <p><?php echo $this->tag->submitButton("SendSubscriptionCancellationPinSMS"); ?></p>
        </form>
        <?php
        echo $this->tag->form("teste/verifysubscriptioncancellationpin"); 
        ?>
            <p><?php echo $this->tag->submitButton("VerifySubscriptionCancellationPin"); ?></p>
        </form>
        <?php
        echo $this->tag->form("teste/headerenrichment"); 
        ?>
            <p><?php echo $this->tag->submitButton("HeaderEnrichment"); ?></p>
        </form>
        <?php
        echo $this->tag->form("teste/updatetransactionstatus"); 
        ?>
            <p><?php echo $this->tag->submitButton("UpdateTransactionStatus"); ?></p>
        </form>
        <?php
        echo $this->tag->form("teste/sendfreemtmessage"); 
        ?>
            <p><?php echo $this->tag->submitButton("SendFreeMTMessage"); ?></p>
        </form>
        <?php
        echo $this->tag->form("teste/modifysubscriptionplanrequest"); 
        ?>
            <p><?php echo $this->tag->submitButton("ModifySubscriptionPlanRequest"); ?></p>
        </form>
        <?php
        echo $this->tag->form("teste/getencryptedmsisdn"); 
        ?>
            <p><?php echo $this->tag->submitButton("GetEncryptedMsisdn"); ?></p>
        </form>
    </div>
</div>

