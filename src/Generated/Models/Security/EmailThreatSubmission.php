<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EmailThreatSubmission extends ThreatSubmission implements Parsable 
{
    /**
     * @var AttackSimulationInfo|null $attackSimulationInfo If the email is phishing simulation, this field will not be null.
    */
    private ?AttackSimulationInfo $attackSimulationInfo = null;
    
    /**
     * @var string|null $internetMessageId Specifies the internet message id of the email being submitted. This information is present in the email header.
    */
    private ?string $internetMessageId = null;
    
    /**
     * @var SubmissionCategory|null $originalCategory The original category of the submission. The possible values are: notJunk, spam, phishing, malware and unkownFutureValue.
    */
    private ?SubmissionCategory $originalCategory = null;
    
    /**
     * @var DateTime|null $receivedDateTime Specifies the date and time stamp when the email was received.
    */
    private ?DateTime $receivedDateTime = null;
    
    /**
     * @var string|null $recipientEmailAddress Specifies the email address (in smtp format) of the recipient who received the email.
    */
    private ?string $recipientEmailAddress = null;
    
    /**
     * @var string|null $sender Specifies the email address of the sender.
    */
    private ?string $sender = null;
    
    /**
     * @var string|null $senderIP Specifies the IP address of the sender.
    */
    private ?string $senderIP = null;
    
    /**
     * @var string|null $subject Specifies the subject of the email .
    */
    private ?string $subject = null;
    
    /**
     * @var TenantAllowOrBlockListAction|null $tenantAllowOrBlockListAction It is used to automatically add allows for the components such as URL, file, sender; which are deemed bad by Microsoft so that similar messages in the future can be allowed.
    */
    private ?TenantAllowOrBlockListAction $tenantAllowOrBlockListAction = null;
    
    /**
     * Instantiates a new EmailThreatSubmission and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.emailThreatSubmission');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmailThreatSubmission
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EmailThreatSubmission {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.emailContentThreatSubmission': return new EmailContentThreatSubmission();
                case '#microsoft.graph.security.emailUrlThreatSubmission': return new EmailUrlThreatSubmission();
            }
        }
        return new EmailThreatSubmission();
    }

    /**
     * Gets the attackSimulationInfo property value. If the email is phishing simulation, this field will not be null.
     * @return AttackSimulationInfo|null
    */
    public function getAttackSimulationInfo(): ?AttackSimulationInfo {
        return $this->attackSimulationInfo;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'attackSimulationInfo' => function (ParseNode $n) use ($o) { $o->setAttackSimulationInfo($n->getObjectValue(array(AttackSimulationInfo::class, 'createFromDiscriminatorValue'))); },
            'internetMessageId' => function (ParseNode $n) use ($o) { $o->setInternetMessageId($n->getStringValue()); },
            'originalCategory' => function (ParseNode $n) use ($o) { $o->setOriginalCategory($n->getEnumValue(SubmissionCategory::class)); },
            'receivedDateTime' => function (ParseNode $n) use ($o) { $o->setReceivedDateTime($n->getDateTimeValue()); },
            'recipientEmailAddress' => function (ParseNode $n) use ($o) { $o->setRecipientEmailAddress($n->getStringValue()); },
            'sender' => function (ParseNode $n) use ($o) { $o->setSender($n->getStringValue()); },
            'senderIP' => function (ParseNode $n) use ($o) { $o->setSenderIP($n->getStringValue()); },
            'subject' => function (ParseNode $n) use ($o) { $o->setSubject($n->getStringValue()); },
            'tenantAllowOrBlockListAction' => function (ParseNode $n) use ($o) { $o->setTenantAllowOrBlockListAction($n->getObjectValue(array(TenantAllowOrBlockListAction::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the internetMessageId property value. Specifies the internet message id of the email being submitted. This information is present in the email header.
     * @return string|null
    */
    public function getInternetMessageId(): ?string {
        return $this->internetMessageId;
    }

    /**
     * Gets the originalCategory property value. The original category of the submission. The possible values are: notJunk, spam, phishing, malware and unkownFutureValue.
     * @return SubmissionCategory|null
    */
    public function getOriginalCategory(): ?SubmissionCategory {
        return $this->originalCategory;
    }

    /**
     * Gets the receivedDateTime property value. Specifies the date and time stamp when the email was received.
     * @return DateTime|null
    */
    public function getReceivedDateTime(): ?DateTime {
        return $this->receivedDateTime;
    }

    /**
     * Gets the recipientEmailAddress property value. Specifies the email address (in smtp format) of the recipient who received the email.
     * @return string|null
    */
    public function getRecipientEmailAddress(): ?string {
        return $this->recipientEmailAddress;
    }

    /**
     * Gets the sender property value. Specifies the email address of the sender.
     * @return string|null
    */
    public function getSender(): ?string {
        return $this->sender;
    }

    /**
     * Gets the senderIP property value. Specifies the IP address of the sender.
     * @return string|null
    */
    public function getSenderIP(): ?string {
        return $this->senderIP;
    }

    /**
     * Gets the subject property value. Specifies the subject of the email .
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Gets the tenantAllowOrBlockListAction property value. It is used to automatically add allows for the components such as URL, file, sender; which are deemed bad by Microsoft so that similar messages in the future can be allowed.
     * @return TenantAllowOrBlockListAction|null
    */
    public function getTenantAllowOrBlockListAction(): ?TenantAllowOrBlockListAction {
        return $this->tenantAllowOrBlockListAction;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('attackSimulationInfo', $this->attackSimulationInfo);
        $writer->writeStringValue('internetMessageId', $this->internetMessageId);
        $writer->writeEnumValue('originalCategory', $this->originalCategory);
        $writer->writeDateTimeValue('receivedDateTime', $this->receivedDateTime);
        $writer->writeStringValue('recipientEmailAddress', $this->recipientEmailAddress);
        $writer->writeStringValue('sender', $this->sender);
        $writer->writeStringValue('senderIP', $this->senderIP);
        $writer->writeStringValue('subject', $this->subject);
        $writer->writeObjectValue('tenantAllowOrBlockListAction', $this->tenantAllowOrBlockListAction);
    }

    /**
     * Sets the attackSimulationInfo property value. If the email is phishing simulation, this field will not be null.
     *  @param AttackSimulationInfo|null $value Value to set for the attackSimulationInfo property.
    */
    public function setAttackSimulationInfo(?AttackSimulationInfo $value ): void {
        $this->attackSimulationInfo = $value;
    }

    /**
     * Sets the internetMessageId property value. Specifies the internet message id of the email being submitted. This information is present in the email header.
     *  @param string|null $value Value to set for the internetMessageId property.
    */
    public function setInternetMessageId(?string $value ): void {
        $this->internetMessageId = $value;
    }

    /**
     * Sets the originalCategory property value. The original category of the submission. The possible values are: notJunk, spam, phishing, malware and unkownFutureValue.
     *  @param SubmissionCategory|null $value Value to set for the originalCategory property.
    */
    public function setOriginalCategory(?SubmissionCategory $value ): void {
        $this->originalCategory = $value;
    }

    /**
     * Sets the receivedDateTime property value. Specifies the date and time stamp when the email was received.
     *  @param DateTime|null $value Value to set for the receivedDateTime property.
    */
    public function setReceivedDateTime(?DateTime $value ): void {
        $this->receivedDateTime = $value;
    }

    /**
     * Sets the recipientEmailAddress property value. Specifies the email address (in smtp format) of the recipient who received the email.
     *  @param string|null $value Value to set for the recipientEmailAddress property.
    */
    public function setRecipientEmailAddress(?string $value ): void {
        $this->recipientEmailAddress = $value;
    }

    /**
     * Sets the sender property value. Specifies the email address of the sender.
     *  @param string|null $value Value to set for the sender property.
    */
    public function setSender(?string $value ): void {
        $this->sender = $value;
    }

    /**
     * Sets the senderIP property value. Specifies the IP address of the sender.
     *  @param string|null $value Value to set for the senderIP property.
    */
    public function setSenderIP(?string $value ): void {
        $this->senderIP = $value;
    }

    /**
     * Sets the subject property value. Specifies the subject of the email .
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

    /**
     * Sets the tenantAllowOrBlockListAction property value. It is used to automatically add allows for the components such as URL, file, sender; which are deemed bad by Microsoft so that similar messages in the future can be allowed.
     *  @param TenantAllowOrBlockListAction|null $value Value to set for the tenantAllowOrBlockListAction property.
    */
    public function setTenantAllowOrBlockListAction(?TenantAllowOrBlockListAction $value ): void {
        $this->tenantAllowOrBlockListAction = $value;
    }

}
