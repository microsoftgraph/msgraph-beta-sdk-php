<?php

namespace Microsoft\Graph\Beta\Generated\Models\HealthMonitoring;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HealthMonitoringDictionary extends Dictionary implements Parsable 
{
    /**
     * Instantiates a new HealthMonitoringDictionary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HealthMonitoringDictionary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HealthMonitoringDictionary {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.healthMonitoring.documentation': return new Documentation();
                case '#microsoft.graph.healthMonitoring.signals': return new Signals();
                case '#microsoft.graph.healthMonitoring.supportingData': return new SupportingData();
            }
        }
        return new HealthMonitoringDictionary();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

}
