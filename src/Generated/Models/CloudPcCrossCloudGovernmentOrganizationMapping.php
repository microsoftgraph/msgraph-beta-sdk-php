<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudPcCrossCloudGovernmentOrganizationMapping extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcCrossCloudGovernmentOrganizationMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcCrossCloudGovernmentOrganizationMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcCrossCloudGovernmentOrganizationMapping {
        return new CloudPcCrossCloudGovernmentOrganizationMapping();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'organizationIdsInUSGovCloud' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOrganizationIdsInUSGovCloud($val);
            },
        ]);
    }

    /**
     * Gets the organizationIdsInUSGovCloud property value. The tenant ID in the Azure Government cloud corresponding to the GCC tenant in the public cloud. Currently, 1:1 mappings are supported, so this collection can only contain one tenant ID.
     * @return array<string>|null
    */
    public function getOrganizationIdsInUSGovCloud(): ?array {
        $val = $this->getBackingStore()->get('organizationIdsInUSGovCloud');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizationIdsInUSGovCloud'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('organizationIdsInUSGovCloud', $this->getOrganizationIdsInUSGovCloud());
    }

    /**
     * Sets the organizationIdsInUSGovCloud property value. The tenant ID in the Azure Government cloud corresponding to the GCC tenant in the public cloud. Currently, 1:1 mappings are supported, so this collection can only contain one tenant ID.
     * @param array<string>|null $value Value to set for the organizationIdsInUSGovCloud property.
    */
    public function setOrganizationIdsInUSGovCloud(?array $value): void {
        $this->getBackingStore()->set('organizationIdsInUSGovCloud', $value);
    }

}
