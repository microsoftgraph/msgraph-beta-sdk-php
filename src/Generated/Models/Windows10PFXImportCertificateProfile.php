<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Deprecated
*/
class Windows10PFXImportCertificateProfile extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new Windows10PFXImportCertificateProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows10PFXImportCertificateProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10PFXImportCertificateProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10PFXImportCertificateProfile {
        return new Windows10PFXImportCertificateProfile();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'keyStorageProvider' => fn(ParseNode $n) => $o->setKeyStorageProvider($n->getEnumValue(KeyStorageProviderOption::class)),
        ]);
    }

    /**
     * Gets the keyStorageProvider property value. Key Storage Provider (KSP) Import Options.
     * @return KeyStorageProviderOption|null
    */
    public function getKeyStorageProvider(): ?KeyStorageProviderOption {
        $val = $this->getBackingStore()->get('keyStorageProvider');
        if (is_null($val) || $val instanceof KeyStorageProviderOption) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyStorageProvider'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('keyStorageProvider', $this->getKeyStorageProvider());
    }

    /**
     * Sets the keyStorageProvider property value. Key Storage Provider (KSP) Import Options.
     * @param KeyStorageProviderOption|null $value Value to set for the keyStorageProvider property.
    */
    public function setKeyStorageProvider(?KeyStorageProviderOption $value): void {
        $this->getBackingStore()->set('keyStorageProvider', $value);
    }

}
