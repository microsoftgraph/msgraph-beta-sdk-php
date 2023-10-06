<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PartnerInformation implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new partnerInformation and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerInformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerInformation {
        return new PartnerInformation();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the commerceUrl property value. The commerceUrl property
     * @return string|null
    */
    public function getCommerceUrl(): ?string {
        $val = $this->getBackingStore()->get('commerceUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'commerceUrl'");
    }

    /**
     * Gets the companyName property value. The companyName property
     * @return string|null
    */
    public function getCompanyName(): ?string {
        $val = $this->getBackingStore()->get('companyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'companyName'");
    }

    /**
     * Gets the companyType property value. The companyType property
     * @return PartnerTenantType|null
    */
    public function getCompanyType(): ?PartnerTenantType {
        $val = $this->getBackingStore()->get('companyType');
        if (is_null($val) || $val instanceof PartnerTenantType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'companyType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'commerceUrl' => fn(ParseNode $n) => $o->setCommerceUrl($n->getStringValue()),
            'companyName' => fn(ParseNode $n) => $o->setCompanyName($n->getStringValue()),
            'companyType' => fn(ParseNode $n) => $o->setCompanyType($n->getEnumValue(PartnerTenantType::class)),
            'helpUrl' => fn(ParseNode $n) => $o->setHelpUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'partnerTenantId' => fn(ParseNode $n) => $o->setPartnerTenantId($n->getStringValue()),
            'supportEmails' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSupportEmails($val);
            },
            'supportTelephones' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSupportTelephones($val);
            },
            'supportUrl' => fn(ParseNode $n) => $o->setSupportUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the helpUrl property value. The helpUrl property
     * @return string|null
    */
    public function getHelpUrl(): ?string {
        $val = $this->getBackingStore()->get('helpUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'helpUrl'");
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
     * Gets the partnerTenantId property value. The partnerTenantId property
     * @return string|null
    */
    public function getPartnerTenantId(): ?string {
        $val = $this->getBackingStore()->get('partnerTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'partnerTenantId'");
    }

    /**
     * Gets the supportEmails property value. The supportEmails property
     * @return array<string>|null
    */
    public function getSupportEmails(): ?array {
        $val = $this->getBackingStore()->get('supportEmails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportEmails'");
    }

    /**
     * Gets the supportTelephones property value. The supportTelephones property
     * @return array<string>|null
    */
    public function getSupportTelephones(): ?array {
        $val = $this->getBackingStore()->get('supportTelephones');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportTelephones'");
    }

    /**
     * Gets the supportUrl property value. The supportUrl property
     * @return string|null
    */
    public function getSupportUrl(): ?string {
        $val = $this->getBackingStore()->get('supportUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('commerceUrl', $this->getCommerceUrl());
        $writer->writeStringValue('companyName', $this->getCompanyName());
        $writer->writeEnumValue('companyType', $this->getCompanyType());
        $writer->writeStringValue('helpUrl', $this->getHelpUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('partnerTenantId', $this->getPartnerTenantId());
        $writer->writeCollectionOfPrimitiveValues('supportEmails', $this->getSupportEmails());
        $writer->writeCollectionOfPrimitiveValues('supportTelephones', $this->getSupportTelephones());
        $writer->writeStringValue('supportUrl', $this->getSupportUrl());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the commerceUrl property value. The commerceUrl property
     * @param string|null $value Value to set for the commerceUrl property.
    */
    public function setCommerceUrl(?string $value): void {
        $this->getBackingStore()->set('commerceUrl', $value);
    }

    /**
     * Sets the companyName property value. The companyName property
     * @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value): void {
        $this->getBackingStore()->set('companyName', $value);
    }

    /**
     * Sets the companyType property value. The companyType property
     * @param PartnerTenantType|null $value Value to set for the companyType property.
    */
    public function setCompanyType(?PartnerTenantType $value): void {
        $this->getBackingStore()->set('companyType', $value);
    }

    /**
     * Sets the helpUrl property value. The helpUrl property
     * @param string|null $value Value to set for the helpUrl property.
    */
    public function setHelpUrl(?string $value): void {
        $this->getBackingStore()->set('helpUrl', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the partnerTenantId property value. The partnerTenantId property
     * @param string|null $value Value to set for the partnerTenantId property.
    */
    public function setPartnerTenantId(?string $value): void {
        $this->getBackingStore()->set('partnerTenantId', $value);
    }

    /**
     * Sets the supportEmails property value. The supportEmails property
     * @param array<string>|null $value Value to set for the supportEmails property.
    */
    public function setSupportEmails(?array $value): void {
        $this->getBackingStore()->set('supportEmails', $value);
    }

    /**
     * Sets the supportTelephones property value. The supportTelephones property
     * @param array<string>|null $value Value to set for the supportTelephones property.
    */
    public function setSupportTelephones(?array $value): void {
        $this->getBackingStore()->set('supportTelephones', $value);
    }

    /**
     * Sets the supportUrl property value. The supportUrl property
     * @param string|null $value Value to set for the supportUrl property.
    */
    public function setSupportUrl(?string $value): void {
        $this->getBackingStore()->set('supportUrl', $value);
    }

}
