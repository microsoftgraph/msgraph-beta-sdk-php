<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AnalyzedEmail extends Entity implements Parsable 
{
    /**
     * Instantiates a new AnalyzedEmail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnalyzedEmail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnalyzedEmail {
        return new AnalyzedEmail();
    }

    /**
     * Gets the alertIds property value. The alertIds property
     * @return array<string>|null
    */
    public function getAlertIds(): ?array {
        $val = $this->getBackingStore()->get('alertIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertIds'");
    }

    /**
     * Gets the attachments property value. The attachments property
     * @return array<AnalyzedEmailAttachment>|null
    */
    public function getAttachments(): ?array {
        $val = $this->getBackingStore()->get('attachments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AnalyzedEmailAttachment::class);
            /** @var array<AnalyzedEmailAttachment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attachments'");
    }

    /**
     * Gets the attachmentsCount property value. The attachmentsCount property
     * @return int|null
    */
    public function getAttachmentsCount(): ?int {
        $val = $this->getBackingStore()->get('attachmentsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attachmentsCount'");
    }

    /**
     * Gets the authenticationDetails property value. The authenticationDetails property
     * @return AnalyzedEmailAuthenticationDetail|null
    */
    public function getAuthenticationDetails(): ?AnalyzedEmailAuthenticationDetail {
        $val = $this->getBackingStore()->get('authenticationDetails');
        if (is_null($val) || $val instanceof AnalyzedEmailAuthenticationDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationDetails'");
    }

    /**
     * Gets the bulkComplaintLevel property value. The bulkComplaintLevel property
     * @return string|null
    */
    public function getBulkComplaintLevel(): ?string {
        $val = $this->getBackingStore()->get('bulkComplaintLevel');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bulkComplaintLevel'");
    }

    /**
     * Gets the contexts property value. The contexts property
     * @return array<string>|null
    */
    public function getContexts(): ?array {
        $val = $this->getBackingStore()->get('contexts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contexts'");
    }

    /**
     * Gets the detectionMethods property value. The detectionMethods property
     * @return array<string>|null
    */
    public function getDetectionMethods(): ?array {
        $val = $this->getBackingStore()->get('detectionMethods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectionMethods'");
    }

    /**
     * Gets the directionality property value. The directionality property
     * @return AntispamDirectionality|null
    */
    public function getDirectionality(): ?AntispamDirectionality {
        $val = $this->getBackingStore()->get('directionality');
        if (is_null($val) || $val instanceof AntispamDirectionality) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'directionality'");
    }

    /**
     * Gets the distributionList property value. The distributionList property
     * @return string|null
    */
    public function getDistributionList(): ?string {
        $val = $this->getBackingStore()->get('distributionList');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'distributionList'");
    }

    /**
     * Gets the emailClusterId property value. The emailClusterId property
     * @return string|null
    */
    public function getEmailClusterId(): ?string {
        $val = $this->getBackingStore()->get('emailClusterId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailClusterId'");
    }

    /**
     * Gets the exchangeTransportRules property value. The exchangeTransportRules property
     * @return array<AnalyzedEmailExchangeTransportRuleInfo>|null
    */
    public function getExchangeTransportRules(): ?array {
        $val = $this->getBackingStore()->get('exchangeTransportRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AnalyzedEmailExchangeTransportRuleInfo::class);
            /** @var array<AnalyzedEmailExchangeTransportRuleInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeTransportRules'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alertIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAlertIds($val);
            },
            'attachments' => fn(ParseNode $n) => $o->setAttachments($n->getCollectionOfObjectValues([AnalyzedEmailAttachment::class, 'createFromDiscriminatorValue'])),
            'attachmentsCount' => fn(ParseNode $n) => $o->setAttachmentsCount($n->getIntegerValue()),
            'authenticationDetails' => fn(ParseNode $n) => $o->setAuthenticationDetails($n->getObjectValue([AnalyzedEmailAuthenticationDetail::class, 'createFromDiscriminatorValue'])),
            'bulkComplaintLevel' => fn(ParseNode $n) => $o->setBulkComplaintLevel($n->getStringValue()),
            'contexts' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setContexts($val);
            },
            'detectionMethods' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDetectionMethods($val);
            },
            'directionality' => fn(ParseNode $n) => $o->setDirectionality($n->getEnumValue(AntispamDirectionality::class)),
            'distributionList' => fn(ParseNode $n) => $o->setDistributionList($n->getStringValue()),
            'emailClusterId' => fn(ParseNode $n) => $o->setEmailClusterId($n->getStringValue()),
            'exchangeTransportRules' => fn(ParseNode $n) => $o->setExchangeTransportRules($n->getCollectionOfObjectValues([AnalyzedEmailExchangeTransportRuleInfo::class, 'createFromDiscriminatorValue'])),
            'internetMessageId' => fn(ParseNode $n) => $o->setInternetMessageId($n->getStringValue()),
            'language' => fn(ParseNode $n) => $o->setLanguage($n->getStringValue()),
            'latestDelivery' => fn(ParseNode $n) => $o->setLatestDelivery($n->getObjectValue([AnalyzedEmailDeliveryDetail::class, 'createFromDiscriminatorValue'])),
            'loggedDateTime' => fn(ParseNode $n) => $o->setLoggedDateTime($n->getDateTimeValue()),
            'networkMessageId' => fn(ParseNode $n) => $o->setNetworkMessageId($n->getStringValue()),
            'originalDelivery' => fn(ParseNode $n) => $o->setOriginalDelivery($n->getObjectValue([AnalyzedEmailDeliveryDetail::class, 'createFromDiscriminatorValue'])),
            'overrideSources' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOverrideSources($val);
            },
            'phishConfidenceLevel' => fn(ParseNode $n) => $o->setPhishConfidenceLevel($n->getStringValue()),
            'policy' => fn(ParseNode $n) => $o->setPolicy($n->getStringValue()),
            'policyAction' => fn(ParseNode $n) => $o->setPolicyAction($n->getStringValue()),
            'recipientEmailAddresses' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRecipientEmailAddresses($val);
            },
            'returnPath' => fn(ParseNode $n) => $o->setReturnPath($n->getStringValue()),
            'senderDetail' => fn(ParseNode $n) => $o->setSenderDetail($n->getObjectValue([AnalyzedEmailSenderDetail::class, 'createFromDiscriminatorValue'])),
            'sizeInBytes' => fn(ParseNode $n) => $o->setSizeInBytes($n->getIntegerValue()),
            'spamConfidenceLevel' => fn(ParseNode $n) => $o->setSpamConfidenceLevel($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'threatType' => fn(ParseNode $n) => $o->setThreatType($n->getEnumValue(ThreatType::class)),
            'urls' => fn(ParseNode $n) => $o->setUrls($n->getCollectionOfObjectValues([AnalyzedEmailUrl::class, 'createFromDiscriminatorValue'])),
            'urlsCount' => fn(ParseNode $n) => $o->setUrlsCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the internetMessageId property value. The internetMessageId property
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
     * Gets the language property value. The language property
     * @return string|null
    */
    public function getLanguage(): ?string {
        $val = $this->getBackingStore()->get('language');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'language'");
    }

    /**
     * Gets the latestDelivery property value. The latestDelivery property
     * @return AnalyzedEmailDeliveryDetail|null
    */
    public function getLatestDelivery(): ?AnalyzedEmailDeliveryDetail {
        $val = $this->getBackingStore()->get('latestDelivery');
        if (is_null($val) || $val instanceof AnalyzedEmailDeliveryDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'latestDelivery'");
    }

    /**
     * Gets the loggedDateTime property value. The loggedDateTime property
     * @return DateTime|null
    */
    public function getLoggedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('loggedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'loggedDateTime'");
    }

    /**
     * Gets the networkMessageId property value. The networkMessageId property
     * @return string|null
    */
    public function getNetworkMessageId(): ?string {
        $val = $this->getBackingStore()->get('networkMessageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkMessageId'");
    }

    /**
     * Gets the originalDelivery property value. The originalDelivery property
     * @return AnalyzedEmailDeliveryDetail|null
    */
    public function getOriginalDelivery(): ?AnalyzedEmailDeliveryDetail {
        $val = $this->getBackingStore()->get('originalDelivery');
        if (is_null($val) || $val instanceof AnalyzedEmailDeliveryDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originalDelivery'");
    }

    /**
     * Gets the overrideSources property value. The overrideSources property
     * @return array<string>|null
    */
    public function getOverrideSources(): ?array {
        $val = $this->getBackingStore()->get('overrideSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'overrideSources'");
    }

    /**
     * Gets the phishConfidenceLevel property value. The phishConfidenceLevel property
     * @return string|null
    */
    public function getPhishConfidenceLevel(): ?string {
        $val = $this->getBackingStore()->get('phishConfidenceLevel');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phishConfidenceLevel'");
    }

    /**
     * Gets the policy property value. The policy property
     * @return string|null
    */
    public function getPolicy(): ?string {
        $val = $this->getBackingStore()->get('policy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policy'");
    }

    /**
     * Gets the policyAction property value. The policyAction property
     * @return string|null
    */
    public function getPolicyAction(): ?string {
        $val = $this->getBackingStore()->get('policyAction');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyAction'");
    }

    /**
     * Gets the recipientEmailAddresses property value. The recipientEmailAddresses property
     * @return array<string>|null
    */
    public function getRecipientEmailAddresses(): ?array {
        $val = $this->getBackingStore()->get('recipientEmailAddresses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipientEmailAddresses'");
    }

    /**
     * Gets the returnPath property value. The returnPath property
     * @return string|null
    */
    public function getReturnPath(): ?string {
        $val = $this->getBackingStore()->get('returnPath');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'returnPath'");
    }

    /**
     * Gets the senderDetail property value. The senderDetail property
     * @return AnalyzedEmailSenderDetail|null
    */
    public function getSenderDetail(): ?AnalyzedEmailSenderDetail {
        $val = $this->getBackingStore()->get('senderDetail');
        if (is_null($val) || $val instanceof AnalyzedEmailSenderDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'senderDetail'");
    }

    /**
     * Gets the sizeInBytes property value. The sizeInBytes property
     * @return int|null
    */
    public function getSizeInBytes(): ?int {
        $val = $this->getBackingStore()->get('sizeInBytes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sizeInBytes'");
    }

    /**
     * Gets the spamConfidenceLevel property value. The spamConfidenceLevel property
     * @return string|null
    */
    public function getSpamConfidenceLevel(): ?string {
        $val = $this->getBackingStore()->get('spamConfidenceLevel');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'spamConfidenceLevel'");
    }

    /**
     * Gets the subject property value. The subject property
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
     * Gets the threatType property value. The threatType property
     * @return ThreatType|null
    */
    public function getThreatType(): ?ThreatType {
        $val = $this->getBackingStore()->get('threatType');
        if (is_null($val) || $val instanceof ThreatType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'threatType'");
    }

    /**
     * Gets the urls property value. The urls property
     * @return array<AnalyzedEmailUrl>|null
    */
    public function getUrls(): ?array {
        $val = $this->getBackingStore()->get('urls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AnalyzedEmailUrl::class);
            /** @var array<AnalyzedEmailUrl>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'urls'");
    }

    /**
     * Gets the urlsCount property value. The urlsCount property
     * @return int|null
    */
    public function getUrlsCount(): ?int {
        $val = $this->getBackingStore()->get('urlsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'urlsCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('alertIds', $this->getAlertIds());
        $writer->writeCollectionOfObjectValues('attachments', $this->getAttachments());
        $writer->writeIntegerValue('attachmentsCount', $this->getAttachmentsCount());
        $writer->writeObjectValue('authenticationDetails', $this->getAuthenticationDetails());
        $writer->writeStringValue('bulkComplaintLevel', $this->getBulkComplaintLevel());
        $writer->writeCollectionOfPrimitiveValues('contexts', $this->getContexts());
        $writer->writeCollectionOfPrimitiveValues('detectionMethods', $this->getDetectionMethods());
        $writer->writeEnumValue('directionality', $this->getDirectionality());
        $writer->writeStringValue('distributionList', $this->getDistributionList());
        $writer->writeStringValue('emailClusterId', $this->getEmailClusterId());
        $writer->writeCollectionOfObjectValues('exchangeTransportRules', $this->getExchangeTransportRules());
        $writer->writeStringValue('internetMessageId', $this->getInternetMessageId());
        $writer->writeStringValue('language', $this->getLanguage());
        $writer->writeObjectValue('latestDelivery', $this->getLatestDelivery());
        $writer->writeDateTimeValue('loggedDateTime', $this->getLoggedDateTime());
        $writer->writeStringValue('networkMessageId', $this->getNetworkMessageId());
        $writer->writeObjectValue('originalDelivery', $this->getOriginalDelivery());
        $writer->writeCollectionOfPrimitiveValues('overrideSources', $this->getOverrideSources());
        $writer->writeStringValue('phishConfidenceLevel', $this->getPhishConfidenceLevel());
        $writer->writeStringValue('policy', $this->getPolicy());
        $writer->writeStringValue('policyAction', $this->getPolicyAction());
        $writer->writeCollectionOfPrimitiveValues('recipientEmailAddresses', $this->getRecipientEmailAddresses());
        $writer->writeStringValue('returnPath', $this->getReturnPath());
        $writer->writeObjectValue('senderDetail', $this->getSenderDetail());
        $writer->writeIntegerValue('sizeInBytes', $this->getSizeInBytes());
        $writer->writeStringValue('spamConfidenceLevel', $this->getSpamConfidenceLevel());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeEnumValue('threatType', $this->getThreatType());
        $writer->writeCollectionOfObjectValues('urls', $this->getUrls());
        $writer->writeIntegerValue('urlsCount', $this->getUrlsCount());
    }

    /**
     * Sets the alertIds property value. The alertIds property
     * @param array<string>|null $value Value to set for the alertIds property.
    */
    public function setAlertIds(?array $value): void {
        $this->getBackingStore()->set('alertIds', $value);
    }

    /**
     * Sets the attachments property value. The attachments property
     * @param array<AnalyzedEmailAttachment>|null $value Value to set for the attachments property.
    */
    public function setAttachments(?array $value): void {
        $this->getBackingStore()->set('attachments', $value);
    }

    /**
     * Sets the attachmentsCount property value. The attachmentsCount property
     * @param int|null $value Value to set for the attachmentsCount property.
    */
    public function setAttachmentsCount(?int $value): void {
        $this->getBackingStore()->set('attachmentsCount', $value);
    }

    /**
     * Sets the authenticationDetails property value. The authenticationDetails property
     * @param AnalyzedEmailAuthenticationDetail|null $value Value to set for the authenticationDetails property.
    */
    public function setAuthenticationDetails(?AnalyzedEmailAuthenticationDetail $value): void {
        $this->getBackingStore()->set('authenticationDetails', $value);
    }

    /**
     * Sets the bulkComplaintLevel property value. The bulkComplaintLevel property
     * @param string|null $value Value to set for the bulkComplaintLevel property.
    */
    public function setBulkComplaintLevel(?string $value): void {
        $this->getBackingStore()->set('bulkComplaintLevel', $value);
    }

    /**
     * Sets the contexts property value. The contexts property
     * @param array<string>|null $value Value to set for the contexts property.
    */
    public function setContexts(?array $value): void {
        $this->getBackingStore()->set('contexts', $value);
    }

    /**
     * Sets the detectionMethods property value. The detectionMethods property
     * @param array<string>|null $value Value to set for the detectionMethods property.
    */
    public function setDetectionMethods(?array $value): void {
        $this->getBackingStore()->set('detectionMethods', $value);
    }

    /**
     * Sets the directionality property value. The directionality property
     * @param AntispamDirectionality|null $value Value to set for the directionality property.
    */
    public function setDirectionality(?AntispamDirectionality $value): void {
        $this->getBackingStore()->set('directionality', $value);
    }

    /**
     * Sets the distributionList property value. The distributionList property
     * @param string|null $value Value to set for the distributionList property.
    */
    public function setDistributionList(?string $value): void {
        $this->getBackingStore()->set('distributionList', $value);
    }

    /**
     * Sets the emailClusterId property value. The emailClusterId property
     * @param string|null $value Value to set for the emailClusterId property.
    */
    public function setEmailClusterId(?string $value): void {
        $this->getBackingStore()->set('emailClusterId', $value);
    }

    /**
     * Sets the exchangeTransportRules property value. The exchangeTransportRules property
     * @param array<AnalyzedEmailExchangeTransportRuleInfo>|null $value Value to set for the exchangeTransportRules property.
    */
    public function setExchangeTransportRules(?array $value): void {
        $this->getBackingStore()->set('exchangeTransportRules', $value);
    }

    /**
     * Sets the internetMessageId property value. The internetMessageId property
     * @param string|null $value Value to set for the internetMessageId property.
    */
    public function setInternetMessageId(?string $value): void {
        $this->getBackingStore()->set('internetMessageId', $value);
    }

    /**
     * Sets the language property value. The language property
     * @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value): void {
        $this->getBackingStore()->set('language', $value);
    }

    /**
     * Sets the latestDelivery property value. The latestDelivery property
     * @param AnalyzedEmailDeliveryDetail|null $value Value to set for the latestDelivery property.
    */
    public function setLatestDelivery(?AnalyzedEmailDeliveryDetail $value): void {
        $this->getBackingStore()->set('latestDelivery', $value);
    }

    /**
     * Sets the loggedDateTime property value. The loggedDateTime property
     * @param DateTime|null $value Value to set for the loggedDateTime property.
    */
    public function setLoggedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('loggedDateTime', $value);
    }

    /**
     * Sets the networkMessageId property value. The networkMessageId property
     * @param string|null $value Value to set for the networkMessageId property.
    */
    public function setNetworkMessageId(?string $value): void {
        $this->getBackingStore()->set('networkMessageId', $value);
    }

    /**
     * Sets the originalDelivery property value. The originalDelivery property
     * @param AnalyzedEmailDeliveryDetail|null $value Value to set for the originalDelivery property.
    */
    public function setOriginalDelivery(?AnalyzedEmailDeliveryDetail $value): void {
        $this->getBackingStore()->set('originalDelivery', $value);
    }

    /**
     * Sets the overrideSources property value. The overrideSources property
     * @param array<string>|null $value Value to set for the overrideSources property.
    */
    public function setOverrideSources(?array $value): void {
        $this->getBackingStore()->set('overrideSources', $value);
    }

    /**
     * Sets the phishConfidenceLevel property value. The phishConfidenceLevel property
     * @param string|null $value Value to set for the phishConfidenceLevel property.
    */
    public function setPhishConfidenceLevel(?string $value): void {
        $this->getBackingStore()->set('phishConfidenceLevel', $value);
    }

    /**
     * Sets the policy property value. The policy property
     * @param string|null $value Value to set for the policy property.
    */
    public function setPolicy(?string $value): void {
        $this->getBackingStore()->set('policy', $value);
    }

    /**
     * Sets the policyAction property value. The policyAction property
     * @param string|null $value Value to set for the policyAction property.
    */
    public function setPolicyAction(?string $value): void {
        $this->getBackingStore()->set('policyAction', $value);
    }

    /**
     * Sets the recipientEmailAddresses property value. The recipientEmailAddresses property
     * @param array<string>|null $value Value to set for the recipientEmailAddresses property.
    */
    public function setRecipientEmailAddresses(?array $value): void {
        $this->getBackingStore()->set('recipientEmailAddresses', $value);
    }

    /**
     * Sets the returnPath property value. The returnPath property
     * @param string|null $value Value to set for the returnPath property.
    */
    public function setReturnPath(?string $value): void {
        $this->getBackingStore()->set('returnPath', $value);
    }

    /**
     * Sets the senderDetail property value. The senderDetail property
     * @param AnalyzedEmailSenderDetail|null $value Value to set for the senderDetail property.
    */
    public function setSenderDetail(?AnalyzedEmailSenderDetail $value): void {
        $this->getBackingStore()->set('senderDetail', $value);
    }

    /**
     * Sets the sizeInBytes property value. The sizeInBytes property
     * @param int|null $value Value to set for the sizeInBytes property.
    */
    public function setSizeInBytes(?int $value): void {
        $this->getBackingStore()->set('sizeInBytes', $value);
    }

    /**
     * Sets the spamConfidenceLevel property value. The spamConfidenceLevel property
     * @param string|null $value Value to set for the spamConfidenceLevel property.
    */
    public function setSpamConfidenceLevel(?string $value): void {
        $this->getBackingStore()->set('spamConfidenceLevel', $value);
    }

    /**
     * Sets the subject property value. The subject property
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the threatType property value. The threatType property
     * @param ThreatType|null $value Value to set for the threatType property.
    */
    public function setThreatType(?ThreatType $value): void {
        $this->getBackingStore()->set('threatType', $value);
    }

    /**
     * Sets the urls property value. The urls property
     * @param array<AnalyzedEmailUrl>|null $value Value to set for the urls property.
    */
    public function setUrls(?array $value): void {
        $this->getBackingStore()->set('urls', $value);
    }

    /**
     * Sets the urlsCount property value. The urlsCount property
     * @param int|null $value Value to set for the urlsCount property.
    */
    public function setUrlsCount(?int $value): void {
        $this->getBackingStore()->set('urlsCount', $value);
    }

}
