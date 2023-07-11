<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

/**
 * By providing a configuration in this profile you can configure Android devices that support OMA-CP.
*/
class AndroidOmaCpConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new androidOmaCpConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidOmaCpConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidOmaCpConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidOmaCpConfiguration {
        return new AndroidOmaCpConfiguration();
    }

    /**
     * Gets the configurationXml property value. Configuration XML that will be applied to the device. When it is read, it only provides a placeholder string since the original data is encrypted and stored.
     * @return StreamInterface|null
    */
    public function getConfigurationXml(): ?StreamInterface {
        $val = $this->getBackingStore()->get('configurationXml');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationXml'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configurationXml' => fn(ParseNode $n) => $o->setConfigurationXml($n->getBinaryContent()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('configurationXml', $this->getConfigurationXml());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the configurationXml property value. Configuration XML that will be applied to the device. When it is read, it only provides a placeholder string since the original data is encrypted and stored.
     * @param StreamInterface|null $value Value to set for the configurationXml property.
    */
    public function setConfigurationXml(?StreamInterface $value): void {
        $this->getBackingStore()->set('configurationXml', $value);
    }

}
