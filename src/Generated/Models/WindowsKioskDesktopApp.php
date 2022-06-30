<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsKioskDesktopApp extends WindowsKioskAppBase implements Parsable 
{
    /**
     * @var string|null $desktopApplicationId Define the DesktopApplicationID of the app
    */
    private ?string $desktopApplicationId = null;
    
    /**
     * @var string|null $desktopApplicationLinkPath Define the DesktopApplicationLinkPath of the app
    */
    private ?string $desktopApplicationLinkPath = null;
    
    /**
     * @var string|null $path Define the path of a desktop app
    */
    private ?string $path = null;
    
    /**
     * Instantiates a new WindowsKioskDesktopApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsKioskDesktopApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsKioskDesktopApp {
        return new WindowsKioskDesktopApp();
    }

    /**
     * Gets the desktopApplicationId property value. Define the DesktopApplicationID of the app
     * @return string|null
    */
    public function getDesktopApplicationId(): ?string {
        return $this->desktopApplicationId;
    }

    /**
     * Gets the desktopApplicationLinkPath property value. Define the DesktopApplicationLinkPath of the app
     * @return string|null
    */
    public function getDesktopApplicationLinkPath(): ?string {
        return $this->desktopApplicationLinkPath;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'desktopApplicationId' => function (ParseNode $n) use ($o) { $o->setDesktopApplicationId($n->getStringValue()); },
            'desktopApplicationLinkPath' => function (ParseNode $n) use ($o) { $o->setDesktopApplicationLinkPath($n->getStringValue()); },
            'path' => function (ParseNode $n) use ($o) { $o->setPath($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the path property value. Define the path of a desktop app
     * @return string|null
    */
    public function getPath(): ?string {
        return $this->path;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('desktopApplicationId', $this->desktopApplicationId);
        $writer->writeStringValue('desktopApplicationLinkPath', $this->desktopApplicationLinkPath);
        $writer->writeStringValue('path', $this->path);
    }

    /**
     * Sets the desktopApplicationId property value. Define the DesktopApplicationID of the app
     *  @param string|null $value Value to set for the desktopApplicationId property.
    */
    public function setDesktopApplicationId(?string $value ): void {
        $this->desktopApplicationId = $value;
    }

    /**
     * Sets the desktopApplicationLinkPath property value. Define the DesktopApplicationLinkPath of the app
     *  @param string|null $value Value to set for the desktopApplicationLinkPath property.
    */
    public function setDesktopApplicationLinkPath(?string $value ): void {
        $this->desktopApplicationLinkPath = $value;
    }

    /**
     * Sets the path property value. Define the path of a desktop app
     *  @param string|null $value Value to set for the path property.
    */
    public function setPath(?string $value ): void {
        $this->path = $value;
    }

}
