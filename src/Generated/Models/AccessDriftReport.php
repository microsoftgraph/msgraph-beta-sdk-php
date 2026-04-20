<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessDriftReport extends Entity implements Parsable 
{
    /**
     * Instantiates a new AccessDriftReport and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessDriftReport
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessDriftReport {
        return new AccessDriftReport();
    }

    /**
     * Gets the downloadUri property value. The downloadUri property
     * @return string|null
    */
    public function getDownloadUri(): ?string {
        $val = $this->getBackingStore()->get('downloadUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'downloadUri'");
    }

    /**
     * Gets the expiresAt property value. The expiresAt property
     * @return DateTime|null
    */
    public function getExpiresAt(): ?DateTime {
        $val = $this->getBackingStore()->get('expiresAt');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expiresAt'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'downloadUri' => fn(ParseNode $n) => $o->setDownloadUri($n->getStringValue()),
            'expiresAt' => fn(ParseNode $n) => $o->setExpiresAt($n->getDateTimeValue()),
            'resourceType' => fn(ParseNode $n) => $o->setResourceType($n->getEnumValue(AccessDriftReportResourceType::class)),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the resourceType property value. The resourceType property
     * @return AccessDriftReportResourceType|null
    */
    public function getResourceType(): ?AccessDriftReportResourceType {
        $val = $this->getBackingStore()->get('resourceType');
        if (is_null($val) || $val instanceof AccessDriftReportResourceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceType'");
    }

    /**
     * Gets the tenantId property value. The tenantId property
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('downloadUri', $this->getDownloadUri());
        $writer->writeDateTimeValue('expiresAt', $this->getExpiresAt());
        $writer->writeEnumValue('resourceType', $this->getResourceType());
        $writer->writeStringValue('tenantId', $this->getTenantId());
    }

    /**
     * Sets the downloadUri property value. The downloadUri property
     * @param string|null $value Value to set for the downloadUri property.
    */
    public function setDownloadUri(?string $value): void {
        $this->getBackingStore()->set('downloadUri', $value);
    }

    /**
     * Sets the expiresAt property value. The expiresAt property
     * @param DateTime|null $value Value to set for the expiresAt property.
    */
    public function setExpiresAt(?DateTime $value): void {
        $this->getBackingStore()->set('expiresAt', $value);
    }

    /**
     * Sets the resourceType property value. The resourceType property
     * @param AccessDriftReportResourceType|null $value Value to set for the resourceType property.
    */
    public function setResourceType(?AccessDriftReportResourceType $value): void {
        $this->getBackingStore()->set('resourceType', $value);
    }

    /**
     * Sets the tenantId property value. The tenantId property
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

}
