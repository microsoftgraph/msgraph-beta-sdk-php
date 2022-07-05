<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsPhone81StoreApp extends MobileApp implements Parsable 
{
    /**
     * @var string|null $appStoreUrl The Windows Phone 8.1 app store URL.
    */
    private ?string $appStoreUrl = null;
    
    /**
     * Instantiates a new WindowsPhone81StoreApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsPhone81StoreApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsPhone81StoreApp {
        return new WindowsPhone81StoreApp();
    }

    /**
     * Gets the appStoreUrl property value. The Windows Phone 8.1 app store URL.
     * @return string|null
    */
    public function getAppStoreUrl(): ?string {
        return $this->appStoreUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appStoreUrl' => function (ParseNode $n) use ($o) { $o->setAppStoreUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appStoreUrl', $this->appStoreUrl);
    }

    /**
     * Sets the appStoreUrl property value. The Windows Phone 8.1 app store URL.
     *  @param string|null $value Value to set for the appStoreUrl property.
    */
    public function setAppStoreUrl(?string $value ): void {
        $this->appStoreUrl = $value;
    }

}
