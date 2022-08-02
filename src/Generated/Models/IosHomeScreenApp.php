<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosHomeScreenApp extends IosHomeScreenItem implements Parsable 
{
    /**
     * @var string|null $bundleID BundleID of the app if isWebClip is false or the URL of a web clip if isWebClip is true.
    */
    private ?string $bundleID = null;
    
    /**
     * @var bool|null $isWebClip When true, the bundle ID will be handled as a URL for a web clip.
    */
    private ?bool $isWebClip = null;
    
    /**
     * Instantiates a new IosHomeScreenApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosHomeScreenApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosHomeScreenApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosHomeScreenApp {
        return new IosHomeScreenApp();
    }

    /**
     * Gets the bundleID property value. BundleID of the app if isWebClip is false or the URL of a web clip if isWebClip is true.
     * @return string|null
    */
    public function getBundleID(): ?string {
        return $this->bundleID;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bundleID' => function (ParseNode $n) use ($o) { $o->setBundleID($n->getStringValue()); },
            'isWebClip' => function (ParseNode $n) use ($o) { $o->setIsWebClip($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the isWebClip property value. When true, the bundle ID will be handled as a URL for a web clip.
     * @return bool|null
    */
    public function getIsWebClip(): ?bool {
        return $this->isWebClip;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('bundleID', $this->bundleID);
        $writer->writeBooleanValue('isWebClip', $this->isWebClip);
    }

    /**
     * Sets the bundleID property value. BundleID of the app if isWebClip is false or the URL of a web clip if isWebClip is true.
     *  @param string|null $value Value to set for the bundleID property.
    */
    public function setBundleID(?string $value ): void {
        $this->bundleID = $value;
    }

    /**
     * Sets the isWebClip property value. When true, the bundle ID will be handled as a URL for a web clip.
     *  @param bool|null $value Value to set for the isWebClip property.
    */
    public function setIsWebClip(?bool $value ): void {
        $this->isWebClip = $value;
    }

}
