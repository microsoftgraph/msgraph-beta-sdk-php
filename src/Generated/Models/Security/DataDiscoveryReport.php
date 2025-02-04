<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DataDiscoveryReport extends Entity implements Parsable 
{
    /**
     * Instantiates a new DataDiscoveryReport and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DataDiscoveryReport
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DataDiscoveryReport {
        return new DataDiscoveryReport();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'uploadedStreams' => fn(ParseNode $n) => $o->setUploadedStreams($n->getCollectionOfObjectValues([CloudAppDiscoveryReport::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the uploadedStreams property value. A collection of streams available for generating cloud discovery report.
     * @return array<CloudAppDiscoveryReport>|null
    */
    public function getUploadedStreams(): ?array {
        $val = $this->getBackingStore()->get('uploadedStreams');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudAppDiscoveryReport::class);
            /** @var array<CloudAppDiscoveryReport>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uploadedStreams'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('uploadedStreams', $this->getUploadedStreams());
    }

    /**
     * Sets the uploadedStreams property value. A collection of streams available for generating cloud discovery report.
     * @param array<CloudAppDiscoveryReport>|null $value Value to set for the uploadedStreams property.
    */
    public function setUploadedStreams(?array $value): void {
        $this->getBackingStore()->set('uploadedStreams', $value);
    }

}
