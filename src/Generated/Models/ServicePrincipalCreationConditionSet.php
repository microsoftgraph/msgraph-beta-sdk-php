<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ServicePrincipalCreationConditionSet extends Entity implements Parsable 
{
    /**
     * Instantiates a new servicePrincipalCreationConditionSet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServicePrincipalCreationConditionSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServicePrincipalCreationConditionSet {
        return new ServicePrincipalCreationConditionSet();
    }

    /**
     * Gets the applicationIds property value. The applicationIds property
     * @return array<string>|null
    */
    public function getApplicationIds(): ?array {
        $val = $this->getBackingStore()->get('applicationIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationIds'");
    }

    /**
     * Gets the applicationPublisherIds property value. The applicationPublisherIds property
     * @return array<string>|null
    */
    public function getApplicationPublisherIds(): ?array {
        $val = $this->getBackingStore()->get('applicationPublisherIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationPublisherIds'");
    }

    /**
     * Gets the applicationsFromVerifiedPublisherOnly property value. The applicationsFromVerifiedPublisherOnly property
     * @return bool|null
    */
    public function getApplicationsFromVerifiedPublisherOnly(): ?bool {
        $val = $this->getBackingStore()->get('applicationsFromVerifiedPublisherOnly');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationsFromVerifiedPublisherOnly'");
    }

    /**
     * Gets the applicationTenantIds property value. The applicationTenantIds property
     * @return array<string>|null
    */
    public function getApplicationTenantIds(): ?array {
        $val = $this->getBackingStore()->get('applicationTenantIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationTenantIds'");
    }

    /**
     * Gets the certifiedApplicationsOnly property value. The certifiedApplicationsOnly property
     * @return bool|null
    */
    public function getCertifiedApplicationsOnly(): ?bool {
        $val = $this->getBackingStore()->get('certifiedApplicationsOnly');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certifiedApplicationsOnly'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setApplicationIds($val);
            },
            'applicationPublisherIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setApplicationPublisherIds($val);
            },
            'applicationsFromVerifiedPublisherOnly' => fn(ParseNode $n) => $o->setApplicationsFromVerifiedPublisherOnly($n->getBooleanValue()),
            'applicationTenantIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setApplicationTenantIds($val);
            },
            'certifiedApplicationsOnly' => fn(ParseNode $n) => $o->setCertifiedApplicationsOnly($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('applicationIds', $this->getApplicationIds());
        $writer->writeCollectionOfPrimitiveValues('applicationPublisherIds', $this->getApplicationPublisherIds());
        $writer->writeBooleanValue('applicationsFromVerifiedPublisherOnly', $this->getApplicationsFromVerifiedPublisherOnly());
        $writer->writeCollectionOfPrimitiveValues('applicationTenantIds', $this->getApplicationTenantIds());
        $writer->writeBooleanValue('certifiedApplicationsOnly', $this->getCertifiedApplicationsOnly());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the applicationIds property value. The applicationIds property
     * @param array<string>|null $value Value to set for the applicationIds property.
    */
    public function setApplicationIds(?array $value): void {
        $this->getBackingStore()->set('applicationIds', $value);
    }

    /**
     * Sets the applicationPublisherIds property value. The applicationPublisherIds property
     * @param array<string>|null $value Value to set for the applicationPublisherIds property.
    */
    public function setApplicationPublisherIds(?array $value): void {
        $this->getBackingStore()->set('applicationPublisherIds', $value);
    }

    /**
     * Sets the applicationsFromVerifiedPublisherOnly property value. The applicationsFromVerifiedPublisherOnly property
     * @param bool|null $value Value to set for the applicationsFromVerifiedPublisherOnly property.
    */
    public function setApplicationsFromVerifiedPublisherOnly(?bool $value): void {
        $this->getBackingStore()->set('applicationsFromVerifiedPublisherOnly', $value);
    }

    /**
     * Sets the applicationTenantIds property value. The applicationTenantIds property
     * @param array<string>|null $value Value to set for the applicationTenantIds property.
    */
    public function setApplicationTenantIds(?array $value): void {
        $this->getBackingStore()->set('applicationTenantIds', $value);
    }

    /**
     * Sets the certifiedApplicationsOnly property value. The certifiedApplicationsOnly property
     * @param bool|null $value Value to set for the certifiedApplicationsOnly property.
    */
    public function setCertifiedApplicationsOnly(?bool $value): void {
        $this->getBackingStore()->set('certifiedApplicationsOnly', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
