<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class MacOSCustomAppConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var string|null $bundleId Bundle id for targeting.
    */
    private ?string $bundleId = null;
    
    /**
     * @var StreamInterface|null $configurationXml Configuration xml. (UTF8 encoded byte array)
    */
    private ?StreamInterface $configurationXml = null;
    
    /**
     * @var string|null $fileName Configuration file name (.plist
    */
    private ?string $fileName = null;
    
    /**
     * Instantiates a new MacOSCustomAppConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSCustomAppConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSCustomAppConfiguration {
        return new MacOSCustomAppConfiguration();
    }

    /**
     * Gets the bundleId property value. Bundle id for targeting.
     * @return string|null
    */
    public function getBundleId(): ?string {
        return $this->bundleId;
    }

    /**
     * Gets the configurationXml property value. Configuration xml. (UTF8 encoded byte array)
     * @return StreamInterface|null
    */
    public function getConfigurationXml(): ?StreamInterface {
        return $this->configurationXml;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bundleId' => function (ParseNode $n) use ($o) { $o->setBundleId($n->getStringValue()); },
            'configurationXml' => function (ParseNode $n) use ($o) { $o->setConfigurationXml($n->getBinaryContent()); },
            'fileName' => function (ParseNode $n) use ($o) { $o->setFileName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the fileName property value. Configuration file name (.plist
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('bundleId', $this->bundleId);
        $writer->writeBinaryContent('configurationXml', $this->configurationXml);
        $writer->writeStringValue('fileName', $this->fileName);
    }

    /**
     * Sets the bundleId property value. Bundle id for targeting.
     *  @param string|null $value Value to set for the bundleId property.
    */
    public function setBundleId(?string $value ): void {
        $this->bundleId = $value;
    }

    /**
     * Sets the configurationXml property value. Configuration xml. (UTF8 encoded byte array)
     *  @param StreamInterface|null $value Value to set for the configurationXml property.
    */
    public function setConfigurationXml(?StreamInterface $value ): void {
        $this->configurationXml = $value;
    }

    /**
     * Sets the fileName property value. Configuration file name (.plist
     *  @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value ): void {
        $this->fileName = $value;
    }

}
