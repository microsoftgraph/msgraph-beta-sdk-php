<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CompanySubscription extends Entity implements Parsable 
{
    /**
     * Instantiates a new companySubscription and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CompanySubscription
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CompanySubscription {
        return new CompanySubscription();
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'isTrial' => fn(ParseNode $n) => $o->setIsTrial($n->getBooleanValue()),
            'nextLifecycleDateTime' => fn(ParseNode $n) => $o->setNextLifecycleDateTime($n->getDateTimeValue()),
            'ocpSubscriptionId' => fn(ParseNode $n) => $o->setOcpSubscriptionId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'serviceStatus' => fn(ParseNode $n) => $o->setServiceStatus($n->getCollectionOfObjectValues([ServicePlanInfo::class, 'createFromDiscriminatorValue'])),
            'skuId' => fn(ParseNode $n) => $o->setSkuId($n->getStringValue()),
            'skuPartNumber' => fn(ParseNode $n) => $o->setSkuPartNumber($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'totalLicenses' => fn(ParseNode $n) => $o->setTotalLicenses($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the isTrial property value. The isTrial property
     * @return bool|null
    */
    public function getIsTrial(): ?bool {
        $val = $this->getBackingStore()->get('isTrial');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isTrial'");
    }

    /**
     * Gets the nextLifecycleDateTime property value. The nextLifecycleDateTime property
     * @return DateTime|null
    */
    public function getNextLifecycleDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('nextLifecycleDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nextLifecycleDateTime'");
    }

    /**
     * Gets the ocpSubscriptionId property value. The ocpSubscriptionId property
     * @return string|null
    */
    public function getOcpSubscriptionId(): ?string {
        $val = $this->getBackingStore()->get('ocpSubscriptionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ocpSubscriptionId'");
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
     * Gets the serviceStatus property value. The serviceStatus property
     * @return array<ServicePlanInfo>|null
    */
    public function getServiceStatus(): ?array {
        $val = $this->getBackingStore()->get('serviceStatus');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ServicePlanInfo::class);
            /** @var array<ServicePlanInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceStatus'");
    }

    /**
     * Gets the skuId property value. The skuId property
     * @return string|null
    */
    public function getSkuId(): ?string {
        $val = $this->getBackingStore()->get('skuId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skuId'");
    }

    /**
     * Gets the skuPartNumber property value. The skuPartNumber property
     * @return string|null
    */
    public function getSkuPartNumber(): ?string {
        $val = $this->getBackingStore()->get('skuPartNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skuPartNumber'");
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the totalLicenses property value. The totalLicenses property
     * @return int|null
    */
    public function getTotalLicenses(): ?int {
        $val = $this->getBackingStore()->get('totalLicenses');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalLicenses'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeBooleanValue('isTrial', $this->getIsTrial());
        $writer->writeDateTimeValue('nextLifecycleDateTime', $this->getNextLifecycleDateTime());
        $writer->writeStringValue('ocpSubscriptionId', $this->getOcpSubscriptionId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('serviceStatus', $this->getServiceStatus());
        $writer->writeStringValue('skuId', $this->getSkuId());
        $writer->writeStringValue('skuPartNumber', $this->getSkuPartNumber());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeIntegerValue('totalLicenses', $this->getTotalLicenses());
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the isTrial property value. The isTrial property
     * @param bool|null $value Value to set for the isTrial property.
    */
    public function setIsTrial(?bool $value): void {
        $this->getBackingStore()->set('isTrial', $value);
    }

    /**
     * Sets the nextLifecycleDateTime property value. The nextLifecycleDateTime property
     * @param DateTime|null $value Value to set for the nextLifecycleDateTime property.
    */
    public function setNextLifecycleDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('nextLifecycleDateTime', $value);
    }

    /**
     * Sets the ocpSubscriptionId property value. The ocpSubscriptionId property
     * @param string|null $value Value to set for the ocpSubscriptionId property.
    */
    public function setOcpSubscriptionId(?string $value): void {
        $this->getBackingStore()->set('ocpSubscriptionId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the serviceStatus property value. The serviceStatus property
     * @param array<ServicePlanInfo>|null $value Value to set for the serviceStatus property.
    */
    public function setServiceStatus(?array $value): void {
        $this->getBackingStore()->set('serviceStatus', $value);
    }

    /**
     * Sets the skuId property value. The skuId property
     * @param string|null $value Value to set for the skuId property.
    */
    public function setSkuId(?string $value): void {
        $this->getBackingStore()->set('skuId', $value);
    }

    /**
     * Sets the skuPartNumber property value. The skuPartNumber property
     * @param string|null $value Value to set for the skuPartNumber property.
    */
    public function setSkuPartNumber(?string $value): void {
        $this->getBackingStore()->set('skuPartNumber', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the totalLicenses property value. The totalLicenses property
     * @param int|null $value Value to set for the totalLicenses property.
    */
    public function setTotalLicenses(?int $value): void {
        $this->getBackingStore()->set('totalLicenses', $value);
    }

}
