<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AnalyzedMessageEvidence extends AlertEvidence implements Parsable 
{
    /**
     * @var string|null $antiSpamDirection The antiSpamDirection property
    */
    private ?string $antiSpamDirection = null;
    
    /**
     * @var int|null $attachmentsCount The attachmentsCount property
    */
    private ?int $attachmentsCount = null;
    
    /**
     * @var string|null $deliveryAction The deliveryAction property
    */
    private ?string $deliveryAction = null;
    
    /**
     * @var string|null $deliveryLocation The deliveryLocation property
    */
    private ?string $deliveryLocation = null;
    
    /**
     * @var string|null $internetMessageId The internetMessageId property
    */
    private ?string $internetMessageId = null;
    
    /**
     * @var string|null $language The language property
    */
    private ?string $language = null;
    
    /**
     * @var string|null $networkMessageId The networkMessageId property
    */
    private ?string $networkMessageId = null;
    
    /**
     * @var EmailSender|null $p1Sender The p1Sender property
    */
    private ?EmailSender $p1Sender = null;
    
    /**
     * @var EmailSender|null $p2Sender The p2Sender property
    */
    private ?EmailSender $p2Sender = null;
    
    /**
     * @var DateTime|null $receivedDateTime The receivedDateTime property
    */
    private ?DateTime $receivedDateTime = null;
    
    /**
     * @var string|null $recipientEmailAddress The recipientEmailAddress property
    */
    private ?string $recipientEmailAddress = null;
    
    /**
     * @var string|null $senderIp The senderIp property
    */
    private ?string $senderIp = null;
    
    /**
     * @var string|null $subject The subject property
    */
    private ?string $subject = null;
    
    /**
     * @var array<string>|null $threatDetectionMethods The threatDetectionMethods property
    */
    private ?array $threatDetectionMethods = null;
    
    /**
     * @var array<string>|null $threats The threats property
    */
    private ?array $threats = null;
    
    /**
     * @var int|null $urlCount The urlCount property
    */
    private ?int $urlCount = null;
    
    /**
     * @var array<string>|null $urls The urls property
    */
    private ?array $urls = null;
    
    /**
     * @var string|null $urn The urn property
    */
    private ?string $urn = null;
    
    /**
     * Instantiates a new AnalyzedMessageEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnalyzedMessageEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnalyzedMessageEvidence {
        return new AnalyzedMessageEvidence();
    }

    /**
     * Gets the antiSpamDirection property value. The antiSpamDirection property
     * @return string|null
    */
    public function getAntiSpamDirection(): ?string {
        return $this->antiSpamDirection;
    }

    /**
     * Gets the attachmentsCount property value. The attachmentsCount property
     * @return int|null
    */
    public function getAttachmentsCount(): ?int {
        return $this->attachmentsCount;
    }

    /**
     * Gets the deliveryAction property value. The deliveryAction property
     * @return string|null
    */
    public function getDeliveryAction(): ?string {
        return $this->deliveryAction;
    }

    /**
     * Gets the deliveryLocation property value. The deliveryLocation property
     * @return string|null
    */
    public function getDeliveryLocation(): ?string {
        return $this->deliveryLocation;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'antiSpamDirection' => function (ParseNode $n) use ($o) { $o->setAntiSpamDirection($n->getStringValue()); },
            'attachmentsCount' => function (ParseNode $n) use ($o) { $o->setAttachmentsCount($n->getIntegerValue()); },
            'deliveryAction' => function (ParseNode $n) use ($o) { $o->setDeliveryAction($n->getStringValue()); },
            'deliveryLocation' => function (ParseNode $n) use ($o) { $o->setDeliveryLocation($n->getStringValue()); },
            'internetMessageId' => function (ParseNode $n) use ($o) { $o->setInternetMessageId($n->getStringValue()); },
            'language' => function (ParseNode $n) use ($o) { $o->setLanguage($n->getStringValue()); },
            'networkMessageId' => function (ParseNode $n) use ($o) { $o->setNetworkMessageId($n->getStringValue()); },
            'p1Sender' => function (ParseNode $n) use ($o) { $o->setP1Sender($n->getObjectValue(array(EmailSender::class, 'createFromDiscriminatorValue'))); },
            'p2Sender' => function (ParseNode $n) use ($o) { $o->setP2Sender($n->getObjectValue(array(EmailSender::class, 'createFromDiscriminatorValue'))); },
            'receivedDateTime' => function (ParseNode $n) use ($o) { $o->setReceivedDateTime($n->getDateTimeValue()); },
            'recipientEmailAddress' => function (ParseNode $n) use ($o) { $o->setRecipientEmailAddress($n->getStringValue()); },
            'senderIp' => function (ParseNode $n) use ($o) { $o->setSenderIp($n->getStringValue()); },
            'subject' => function (ParseNode $n) use ($o) { $o->setSubject($n->getStringValue()); },
            'threatDetectionMethods' => function (ParseNode $n) use ($o) { $o->setThreatDetectionMethods($n->getCollectionOfPrimitiveValues()); },
            'threats' => function (ParseNode $n) use ($o) { $o->setThreats($n->getCollectionOfPrimitiveValues()); },
            'urlCount' => function (ParseNode $n) use ($o) { $o->setUrlCount($n->getIntegerValue()); },
            'urls' => function (ParseNode $n) use ($o) { $o->setUrls($n->getCollectionOfPrimitiveValues()); },
            'urn' => function (ParseNode $n) use ($o) { $o->setUrn($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the internetMessageId property value. The internetMessageId property
     * @return string|null
    */
    public function getInternetMessageId(): ?string {
        return $this->internetMessageId;
    }

    /**
     * Gets the language property value. The language property
     * @return string|null
    */
    public function getLanguage(): ?string {
        return $this->language;
    }

    /**
     * Gets the networkMessageId property value. The networkMessageId property
     * @return string|null
    */
    public function getNetworkMessageId(): ?string {
        return $this->networkMessageId;
    }

    /**
     * Gets the p1Sender property value. The p1Sender property
     * @return EmailSender|null
    */
    public function getP1Sender(): ?EmailSender {
        return $this->p1Sender;
    }

    /**
     * Gets the p2Sender property value. The p2Sender property
     * @return EmailSender|null
    */
    public function getP2Sender(): ?EmailSender {
        return $this->p2Sender;
    }

    /**
     * Gets the receivedDateTime property value. The receivedDateTime property
     * @return DateTime|null
    */
    public function getReceivedDateTime(): ?DateTime {
        return $this->receivedDateTime;
    }

    /**
     * Gets the recipientEmailAddress property value. The recipientEmailAddress property
     * @return string|null
    */
    public function getRecipientEmailAddress(): ?string {
        return $this->recipientEmailAddress;
    }

    /**
     * Gets the senderIp property value. The senderIp property
     * @return string|null
    */
    public function getSenderIp(): ?string {
        return $this->senderIp;
    }

    /**
     * Gets the subject property value. The subject property
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Gets the threatDetectionMethods property value. The threatDetectionMethods property
     * @return array<string>|null
    */
    public function getThreatDetectionMethods(): ?array {
        return $this->threatDetectionMethods;
    }

    /**
     * Gets the threats property value. The threats property
     * @return array<string>|null
    */
    public function getThreats(): ?array {
        return $this->threats;
    }

    /**
     * Gets the urlCount property value. The urlCount property
     * @return int|null
    */
    public function getUrlCount(): ?int {
        return $this->urlCount;
    }

    /**
     * Gets the urls property value. The urls property
     * @return array<string>|null
    */
    public function getUrls(): ?array {
        return $this->urls;
    }

    /**
     * Gets the urn property value. The urn property
     * @return string|null
    */
    public function getUrn(): ?string {
        return $this->urn;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('antiSpamDirection', $this->antiSpamDirection);
        $writer->writeIntegerValue('attachmentsCount', $this->attachmentsCount);
        $writer->writeStringValue('deliveryAction', $this->deliveryAction);
        $writer->writeStringValue('deliveryLocation', $this->deliveryLocation);
        $writer->writeStringValue('internetMessageId', $this->internetMessageId);
        $writer->writeStringValue('language', $this->language);
        $writer->writeStringValue('networkMessageId', $this->networkMessageId);
        $writer->writeObjectValue('p1Sender', $this->p1Sender);
        $writer->writeObjectValue('p2Sender', $this->p2Sender);
        $writer->writeDateTimeValue('receivedDateTime', $this->receivedDateTime);
        $writer->writeStringValue('recipientEmailAddress', $this->recipientEmailAddress);
        $writer->writeStringValue('senderIp', $this->senderIp);
        $writer->writeStringValue('subject', $this->subject);
        $writer->writeCollectionOfPrimitiveValues('threatDetectionMethods', $this->threatDetectionMethods);
        $writer->writeCollectionOfPrimitiveValues('threats', $this->threats);
        $writer->writeIntegerValue('urlCount', $this->urlCount);
        $writer->writeCollectionOfPrimitiveValues('urls', $this->urls);
        $writer->writeStringValue('urn', $this->urn);
    }

    /**
     * Sets the antiSpamDirection property value. The antiSpamDirection property
     *  @param string|null $value Value to set for the antiSpamDirection property.
    */
    public function setAntiSpamDirection(?string $value ): void {
        $this->antiSpamDirection = $value;
    }

    /**
     * Sets the attachmentsCount property value. The attachmentsCount property
     *  @param int|null $value Value to set for the attachmentsCount property.
    */
    public function setAttachmentsCount(?int $value ): void {
        $this->attachmentsCount = $value;
    }

    /**
     * Sets the deliveryAction property value. The deliveryAction property
     *  @param string|null $value Value to set for the deliveryAction property.
    */
    public function setDeliveryAction(?string $value ): void {
        $this->deliveryAction = $value;
    }

    /**
     * Sets the deliveryLocation property value. The deliveryLocation property
     *  @param string|null $value Value to set for the deliveryLocation property.
    */
    public function setDeliveryLocation(?string $value ): void {
        $this->deliveryLocation = $value;
    }

    /**
     * Sets the internetMessageId property value. The internetMessageId property
     *  @param string|null $value Value to set for the internetMessageId property.
    */
    public function setInternetMessageId(?string $value ): void {
        $this->internetMessageId = $value;
    }

    /**
     * Sets the language property value. The language property
     *  @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value ): void {
        $this->language = $value;
    }

    /**
     * Sets the networkMessageId property value. The networkMessageId property
     *  @param string|null $value Value to set for the networkMessageId property.
    */
    public function setNetworkMessageId(?string $value ): void {
        $this->networkMessageId = $value;
    }

    /**
     * Sets the p1Sender property value. The p1Sender property
     *  @param EmailSender|null $value Value to set for the p1Sender property.
    */
    public function setP1Sender(?EmailSender $value ): void {
        $this->p1Sender = $value;
    }

    /**
     * Sets the p2Sender property value. The p2Sender property
     *  @param EmailSender|null $value Value to set for the p2Sender property.
    */
    public function setP2Sender(?EmailSender $value ): void {
        $this->p2Sender = $value;
    }

    /**
     * Sets the receivedDateTime property value. The receivedDateTime property
     *  @param DateTime|null $value Value to set for the receivedDateTime property.
    */
    public function setReceivedDateTime(?DateTime $value ): void {
        $this->receivedDateTime = $value;
    }

    /**
     * Sets the recipientEmailAddress property value. The recipientEmailAddress property
     *  @param string|null $value Value to set for the recipientEmailAddress property.
    */
    public function setRecipientEmailAddress(?string $value ): void {
        $this->recipientEmailAddress = $value;
    }

    /**
     * Sets the senderIp property value. The senderIp property
     *  @param string|null $value Value to set for the senderIp property.
    */
    public function setSenderIp(?string $value ): void {
        $this->senderIp = $value;
    }

    /**
     * Sets the subject property value. The subject property
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

    /**
     * Sets the threatDetectionMethods property value. The threatDetectionMethods property
     *  @param array<string>|null $value Value to set for the threatDetectionMethods property.
    */
    public function setThreatDetectionMethods(?array $value ): void {
        $this->threatDetectionMethods = $value;
    }

    /**
     * Sets the threats property value. The threats property
     *  @param array<string>|null $value Value to set for the threats property.
    */
    public function setThreats(?array $value ): void {
        $this->threats = $value;
    }

    /**
     * Sets the urlCount property value. The urlCount property
     *  @param int|null $value Value to set for the urlCount property.
    */
    public function setUrlCount(?int $value ): void {
        $this->urlCount = $value;
    }

    /**
     * Sets the urls property value. The urls property
     *  @param array<string>|null $value Value to set for the urls property.
    */
    public function setUrls(?array $value ): void {
        $this->urls = $value;
    }

    /**
     * Sets the urn property value. The urn property
     *  @param string|null $value Value to set for the urn property.
    */
    public function setUrn(?string $value ): void {
        $this->urn = $value;
    }

}
