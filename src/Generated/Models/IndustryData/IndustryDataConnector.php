<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IndustryDataConnector extends Entity implements Parsable 
{
    /**
     * Instantiates a new IndustryDataConnector and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IndustryDataConnector
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IndustryDataConnector {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.industryData.apiDataConnector': return new ApiDataConnector();
                case '#microsoft.graph.industryData.azureDataLakeConnector': return new AzureDataLakeConnector();
                case '#microsoft.graph.industryData.fileDataConnector': return new FileDataConnector();
                case '#microsoft.graph.industryData.oneRosterApiDataConnector': return new OneRosterApiDataConnector();
            }
        }
        return new IndustryDataConnector();
    }

    /**
     * Gets the displayName property value. The name of the data connector. Maximum supported length is 100 characters.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'sourceSystem' => fn(ParseNode $n) => $o->setSourceSystem($n->getObjectValue([SourceSystemDefinition::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the sourceSystem property value. The sourceSystem property
     * @return SourceSystemDefinition|null
    */
    public function getSourceSystem(): ?SourceSystemDefinition {
        $val = $this->getBackingStore()->get('sourceSystem');
        if (is_null($val) || $val instanceof SourceSystemDefinition) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceSystem'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('sourceSystem', $this->getSourceSystem());
    }

    /**
     * Sets the displayName property value. The name of the data connector. Maximum supported length is 100 characters.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the sourceSystem property value. The sourceSystem property
     * @param SourceSystemDefinition|null $value Value to set for the sourceSystem property.
    */
    public function setSourceSystem(?SourceSystemDefinition $value): void {
        $this->getBackingStore()->set('sourceSystem', $value);
    }

}
