<style>
    pre code{font-size: 8px!important;}
</style>

<div class="page-header">
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
        echo $this->tag->form("testrequests/addsubscriptioncontractrequest"); 
        ?>
            <p><?php echo $this->tag->submitButton("AddsubScriptionContractRequest"); ?></p>
        </form>
        <?php 
        echo $this->tag->form("testrequests/verifysubscriptioncontract"); 
        ?>
            <p><?php echo $this->tag->submitButton("VerifySubscriptionContract"); ?></p>
        </form>
        <?php 
        echo $this->tag->form("testrequests/confirmdirectpaymenttransaction"); 
        ?>  
            <p><?php echo $this->tag->submitButton("ConfirmDirectPaymentTransaction"); ?></p>
        </form>
        <?php 
        echo $this->tag->form("testrequests/sendsubscriptioncontractverificationsms"); 
        ?>
            <p><?php echo $this->tag->submitButton("SendSubscriptionContractVerificationSMS"); ?></p>
        </form>
        <?php
        echo $this->tag->form("testrequests/suspendsubscriptioncontractrequest"); 
        ?>
            <p><?php echo $this->tag->submitButton("SuspendSubscriptionContractRequest"); ?></p>
        </form>
        <?php
        echo $this->tag->form("testrequests/purgesubscriptioncontractrequest"); 
        ?>
            <p><?php echo $this->tag->submitButton("PurgeSubscriptionContractRequest"); ?></p>
        </form>
        <?php
        echo $this->tag->form("testrequests/cancelsubscriptioncontractrequest"); 
        ?>
            <p><?php echo $this->tag->submitButton("CancelSubscriptionContractRequest"); ?></p>
        </form>
    </div>
        <div class="col-lg-6">
        <?php 
        echo $this->tag->form("testrequests/subscriptioncharging"); 
        ?>
            <p><?php echo $this->tag->submitButton("SubscriptionCharging"); ?></p>
        </form>
        <?php 
        echo $this->tag->form("testrequests/getsubscriptioncontracts"); 
        ?>
            <p><?php echo $this->tag->submitButton("GetSubscriptionContracts"); ?></p>
        </form>
        <?php 
        echo $this->tag->form("testrequests/skipbill"); 
        ?>  
            <p><?php echo $this->tag->submitButton("SkipBill"); ?></p>
        </form>
        <?php 
        echo $this->tag->form("testrequests/sendsubscriptioncancellationpinsms"); 
        ?>
            <p><?php echo $this->tag->submitButton("SendSubscriptionCancellationPinSMS"); ?></p>
        </form>
        <?php
        echo $this->tag->form("testrequests/verifysubscriptioncancellationpin"); 
        ?>
            <p><?php echo $this->tag->submitButton("VerifySubscriptionCancellationPin"); ?></p>
        </form>
        <?php
        echo $this->tag->form("testrequests/headerenrichment"); 
        ?>
            <p><?php echo $this->tag->submitButton("HeaderEnrichment"); ?></p>
        </form>
        <?php
        echo $this->tag->form("testrequests/updatetransactionstatus"); 
        ?>
            <p><?php echo $this->tag->submitButton("UpdateTransactionStatus"); ?></p>
        </form>
        <?php
        echo $this->tag->form("testrequests/sendfreemtmessage"); 
        ?>
            <p><?php echo $this->tag->submitButton("SendFreeMTMessage"); ?></p>
        </form>
        <?php
        echo $this->tag->form("testrequests/modifysubscriptionplanrequest"); 
        ?>
            <p><?php echo $this->tag->submitButton("ModifySubscriptionPlanRequest"); ?></p>
        </form>
        <?php
        echo $this->tag->form("testrequests/getencryptedmsisdn"); 
        ?>
            <p><?php echo $this->tag->submitButton("GetEncryptedMsisdn"); ?></p>
        </form>
    </div>
</div>

