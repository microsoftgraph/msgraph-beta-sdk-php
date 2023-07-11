<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EmailThreatSubmission extends ThreatSubmission implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new emailThreatSubmission and sets the default values.
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
        $val = $this->getBackingStore()->get('attackSimulationInfo');
        if (is_null($val) || $val instanceof AttackSimulationInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attackSimulationInfo'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'attackSimulationInfo' => fn(ParseNode $n) => $o->setAttackSimulationInfo($n->getObjectValue([AttackSimulationInfo::class, 'createFromDiscriminatorValue'])),
            'internetMessageId' => fn(ParseNode $n) => $o->setInternetMessageId($n->getStringValue()),
            'originalCategory' => fn(ParseNode $n) => $o->setOriginalCategory($n->getEnumValue(SubmissionCategory::class)),
            'receivedDateTime' => fn(ParseNode $n) => $o->setReceivedDateTime($n->getDateTimeValue()),
            'recipientEmailAddress' => fn(ParseNode $n) => $o->setRecipientEmailAddress($n->getStringValue()),
            'sender' => fn(ParseNode $n) => $o->setSender($n->getStringValue()),
            'senderIP' => fn(ParseNode $n) => $o->setSenderIP($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'tenantAllowOrBlockListAction' => fn(ParseNode $n) => $o->setTenantAllowOrBlockListAction($n->getObjectValue([TenantAllowOrBlockListAction::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the internetMessageId property value. Specifies the internet message id of the email being submitted. This information is present in the email header.
     * @return string|null
    */
    public function getInternetMessageId(): ?string {
        $val = $this->getBackingStore()->get('internetMessageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'internetMessageId'");
    }

    /**
     * Gets the originalCategory property value. The original category of the submission. The possible values are: notJunk, spam, phishing, malware and unkownFutureValue.
     * @return SubmissionCategory|null
    */
    public function getOriginalCategory(): ?SubmissionCategory {
        $val = $this->getBackingStore()->get('originalCategory');
        if (is_null($val) || $val instanceof SubmissionCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originalCategory'");
    }

    /**
     * Gets the receivedDateTime property value. Specifies the date and time stamp when the email was received.
     * @return DateTime|null
    */
    public function getReceivedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('receivedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'receivedDateTime'");
    }

    /**
     * Gets the recipientEmailAddress property value. Specifies the email address (in smtp format) of the recipient who received the email.
     * @return string|null
    */
    public function getRecipientEmailAddress(): ?string {
        $val = $this->getBackingStore()->get('recipientEmailAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipientEmailAddress'");
    }

    /**
     * Gets the sender property value. Specifies the email address of the sender.
     * @return string|null
    */
    public function getSender(): ?string {
        $val = $this->getBackingStore()->get('sender');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sender'");
    }

    /**
     * Gets the senderIP property value. Specifies the IP address of the sender.
     * @return string|null
    */
    public function getSenderIP(): ?string {
        $val = $this->getBackingStore()->get('senderIP');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'senderIP'");
    }

    /**
     * Gets the subject property value. Specifies the subject of the email .
     * @return string|null
    */
    public function getSubject(): ?string {
        $val = $this->getBackingStore()->get('subject');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subject'");
    }

    /**
     * Gets the tenantAllowOrBlockListAction property value. It is used to automatically add allows for the components such as URL, file, sender; which are deemed bad by Microsoft so that similar messages in the future can be allowed.
     * @return TenantAllowOrBlockListAction|null
    */
    public function getTenantAllowOrBlockListAction(): ?TenantAllowOrBlockListAction {
        $val = $this->getBackingStore()->get('tenantAllowOrBlockListAction');
        if (is_null($val) || $val instanceof TenantAllowOrBlockListAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantAllowOrBlockListAction'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('attackSimulationInfo', $this->getAttackSimulationInfo());
        $writer->writeStringValue('internetMessageId', $this->getInternetMessageId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('originalCategory', $this->getOriginalCategory());
        $writer->writeDateTimeValue('receivedDateTime', $this->getReceivedDateTime());
        $writer->writeStringValue('recipientEmailAddress', $this->getRecipientEmailAddress());
        $writer->writeStringValue('sender', $this->getSender());
        $writer->writeStringValue('senderIP', $this->getSenderIP());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeObjectValue('tenantAllowOrBlockListAction', $this->getTenantAllowOrBlockListAction());
    }

    /**
     * Sets the attackSimulationInfo property value. If the email is phishing simulation, this field will not be null.
     * @param AttackSimulationInfo|null $value Value to set for the attackSimulationInfo property.
    */
    public function setAttackSimulationInfo(?AttackSimulationInfo $value): void {
        $this->getBackingStore()->set('attackSimulationInfo', $value);
    }

    /**
     * Sets the internetMessageId property value. Specifies the internet message id of the email being submitted. This information is present in the email header.
     * @param string|null $value Value to set for the internetMessageId property.
    */
    public function setInternetMessageId(?string $value): void {
        $this->getBackingStore()->set('internetMessageId', $value);
    }

    /**
     * Sets the originalCategory property value. The original category of the submission. The possible values are: notJunk, spam, phishing, malware and unkownFutureValue.
     * @param SubmissionCategory|null $value Value to set for the originalCategory property.
    */
    public function setOriginalCategory(?SubmissionCategory $value): void {
        $this->getBackingStore()->set('originalCategory', $value);
    }

    /**
     * Sets the receivedDateTime property value. Specifies the date and time stamp when the email was received.
     * @param DateTime|null $value Value to set for the receivedDateTime property.
    */
    public function setReceivedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('receivedDateTime', $value);
    }

    /**
     * Sets the recipientEmailAddress property value. Specifies the email address (in smtp format) of the recipient who received the email.
     * @param string|null $value Value to set for the recipientEmailAddress property.
    */
    public function setRecipientEmailAddress(?string $value): void {
        $this->getBackingStore()->set('recipientEmailAddress', $value);
    }

    /**
     * Sets the sender property value. Specifies the email address of the sender.
     * @param string|null $value Value to set for the sender property.
    */
    public function setSender(?string $value): void {
        $this->getBackingStore()->set('sender', $value);
    }

    /**
     * Sets the senderIP property value. Specifies the IP address of the sender.
     * @param string|null $value Value to set for the senderIP property.
    */
    public function setSenderIP(?string $value): void {
        $this->getBackingStore()->set('senderIP', $value);
    }

    /**
     * Sets the subject property value. Specifies the subject of the email .
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the tenantAllowOrBlockListAction property value. It is used to automatically add allows for the components such as URL, file, sender; which are deemed bad by Microsoft so that similar messages in the future can be allowed.
     * @param TenantAllowOrBlockListAction|null $value Value to set for the tenantAllowOrBlockListAction property.
    */
    public function setTenantAllowOrBlockListAction(?TenantAllowOrBlockListAction $value): void {
        $this->getBackingStore()->set('tenantAllowOrBlockListAction', $value);
    }

}
