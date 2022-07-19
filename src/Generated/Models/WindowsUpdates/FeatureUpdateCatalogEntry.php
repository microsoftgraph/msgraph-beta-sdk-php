<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FeatureUpdateCatalogEntry extends SoftwareUpdateCatalogEntry implements Parsable 
{
    /**
     * @var string|null $version The version of the feature update. Read-only.
    */
    private ?string $version = null;
    
    /**
     * Instantiates a new FeatureUpdateCatalogEntry and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.featureUpdateCatalogEntry');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeatureUpdateCatalogEntry
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeatureUpdateCatalogEntry {
        return new FeatureUpdateCatalogEntry();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the version property value. The version of the feature update. Read-only.
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('version', $this->version);
    }

    /**
     * Sets the version property value. The version of the feature update. Read-only.
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}
