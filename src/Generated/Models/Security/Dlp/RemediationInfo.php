<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\Dlp;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RemediationInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new RemediationInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemediationInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemediationInfo {
        return new RemediationInfo();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the alertId property value. The alertId property
     * @return string|null
    */
    public function getAlertId(): ?string {
        $val = $this->getBackingStore()->get('alertId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertId'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the bccRecipients property value. The bccRecipients property
     * @return array<string>|null
    */
    public function getBccRecipients(): ?array {
        $val = $this->getBackingStore()->get('bccRecipients');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bccRecipients'");
    }

    /**
     * Gets the ccRecipients property value. The ccRecipients property
     * @return array<string>|null
    */
    public function getCcRecipients(): ?array {
        $val = $this->getBackingStore()->get('ccRecipients');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ccRecipients'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'alertId' => fn(ParseNode $n) => $o->setAlertId($n->getStringValue()),
            'bccRecipients' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setBccRecipients($val);
            },
            'ccRecipients' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCcRecipients($val);
            },
            'iwUser' => fn(ParseNode $n) => $o->setIwUser($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'recipients' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRecipients($val);
            },
            'remediationActivity' => fn(ParseNode $n) => $o->setRemediationActivity($n->getEnumValue(RemediationActivityType::class)),
            'sender' => fn(ParseNode $n) => $o->setSender($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'templateName' => fn(ParseNode $n) => $o->setTemplateName($n->getStringValue()),
        ];
    }

    /**
     * Gets the iwUser property value. The iwUser property
     * @return string|null
    */
    public function getIwUser(): ?string {
        $val = $this->getBackingStore()->get('iwUser');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iwUser'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the recipients property value. The recipients property
     * @return array<string>|null
    */
    public function getRecipients(): ?array {
        $val = $this->getBackingStore()->get('recipients');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipients'");
    }

    /**
     * Gets the remediationActivity property value. The remediationActivity property
     * @return RemediationActivityType|null
    */
    public function getRemediationActivity(): ?RemediationActivityType {
        $val = $this->getBackingStore()->get('remediationActivity');
        if (is_null($val) || $val instanceof RemediationActivityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remediationActivity'");
    }

    /**
     * Gets the sender property value. The sender property
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
     * Gets the templateName property value. The templateName property
     * @return string|null
    */
    public function getTemplateName(): ?string {
        $val = $this->getBackingStore()->get('templateName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'templateName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('alertId', $this->getAlertId());
        $writer->writeCollectionOfPrimitiveValues('bccRecipients', $this->getBccRecipients());
        $writer->writeCollectionOfPrimitiveValues('ccRecipients', $this->getCcRecipients());
        $writer->writeStringValue('iwUser', $this->getIwUser());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('recipients', $this->getRecipients());
        $writer->writeEnumValue('remediationActivity', $this->getRemediationActivity());
        $writer->writeStringValue('sender', $this->getSender());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeStringValue('templateName', $this->getTemplateName());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the alertId property value. The alertId property
     * @param string|null $value Value to set for the alertId property.
    */
    public function setAlertId(?string $value): void {
        $this->getBackingStore()->set('alertId', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the bccRecipients property value. The bccRecipients property
     * @param array<string>|null $value Value to set for the bccRecipients property.
    */
    public function setBccRecipients(?array $value): void {
        $this->getBackingStore()->set('bccRecipients', $value);
    }

    /**
     * Sets the ccRecipients property value. The ccRecipients property
     * @param array<string>|null $value Value to set for the ccRecipients property.
    */
    public function setCcRecipients(?array $value): void {
        $this->getBackingStore()->set('ccRecipients', $value);
    }

    /**
     * Sets the iwUser property value. The iwUser property
     * @param string|null $value Value to set for the iwUser property.
    */
    public function setIwUser(?string $value): void {
        $this->getBackingStore()->set('iwUser', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the recipients property value. The recipients property
     * @param array<string>|null $value Value to set for the recipients property.
    */
    public function setRecipients(?array $value): void {
        $this->getBackingStore()->set('recipients', $value);
    }

    /**
     * Sets the remediationActivity property value. The remediationActivity property
     * @param RemediationActivityType|null $value Value to set for the remediationActivity property.
    */
    public function setRemediationActivity(?RemediationActivityType $value): void {
        $this->getBackingStore()->set('remediationActivity', $value);
    }

    /**
     * Sets the sender property value. The sender property
     * @param string|null $value Value to set for the sender property.
    */
    public function setSender(?string $value): void {
        $this->getBackingStore()->set('sender', $value);
    }

    /**
     * Sets the subject property value. The subject property
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the templateName property value. The templateName property
     * @param string|null $value Value to set for the templateName property.
    */
    public function setTemplateName(?string $value): void {
        $this->getBackingStore()->set('templateName', $value);
    }

}
