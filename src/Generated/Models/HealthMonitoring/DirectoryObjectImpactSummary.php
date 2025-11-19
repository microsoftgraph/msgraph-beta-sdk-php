<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\HealthMonitoring;

use Microsoft\\Graph\\Beta\\Generated\Models\DirectoryObject;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DirectoryObjectImpactSummary extends ResourceImpactSummary implements Parsable 
{
    /**
     * Instantiates a new DirectoryObjectImpactSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.healthMonitoring.directoryObjectImpactSummary');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DirectoryObjectImpactSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DirectoryObjectImpactSummary {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.healthMonitoring.applicationImpactSummary': return new ApplicationImpactSummary();
                case '#microsoft.graph.healthMonitoring.deviceImpactSummary': return new DeviceImpactSummary();
                case '#microsoft.graph.healthMonitoring.groupImpactSummary': return new GroupImpactSummary();
                case '#microsoft.graph.healthMonitoring.servicePrincipalImpactSummary': return new ServicePrincipalImpactSummary();
                case '#microsoft.graph.healthMonitoring.userImpactSummary': return new UserImpactSummary();
            }
        }
        return new DirectoryObjectImpactSummary();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'resourceSampling' => fn(ParseNode $n) => $o->setResourceSampling($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the resourceSampling property value. The resourceSampling property
     * @return array<DirectoryObject>|null
    */
    public function getResourceSampling(): ?array {
        $val = $this->getBackingStore()->get('resourceSampling');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceSampling'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('resourceSampling', $this->getResourceSampling());
    }

    /**
     * Sets the resourceSampling property value. The resourceSampling property
     * @param array<DirectoryObject>|null $value Value to set for the resourceSampling property.
    */
    public function setResourceSampling(?array $value): void {
        $this->getBackingStore()->set('resourceSampling', $value);
    }

}
