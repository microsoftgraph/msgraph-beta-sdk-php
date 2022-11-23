<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceOwnerGlobalProxyAutoConfig extends AndroidDeviceOwnerGlobalProxy implements Parsable 
{
    /**
     * Instantiates a new AndroidDeviceOwnerGlobalProxyAutoConfig and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidDeviceOwnerGlobalProxyAutoConfig');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerGlobalProxyAutoConfig
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerGlobalProxyAutoConfig {
        return new AndroidDeviceOwnerGlobalProxyAutoConfig();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'proxyAutoConfigURL' => fn(ParseNode $n) => $o->setProxyAutoConfigURL($n->getStringValue()),
        ]);
    }

    /**
     * Gets the proxyAutoConfigURL property value. The proxy auto-config URL
     * @return string|null
    */
    public function getProxyAutoConfigURL(): ?string {
        return $this->getBackingStore()->get('proxyAutoConfigURL');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('proxyAutoConfigURL', $this->getProxyAutoConfigURL());
    }

    /**
     * Sets the proxyAutoConfigURL property value. The proxy auto-config URL
     *  @param string|null $value Value to set for the proxyAutoConfigURL property.
    */
    public function setProxyAutoConfigURL(?string $value): void {
        $this->getBackingStore()->set('proxyAutoConfigURL', $value);
    }

}
