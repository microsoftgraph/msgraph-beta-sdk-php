<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class WindowsKioskMultipleApps extends WindowsKioskAppConfiguration implements Parsable 
{
    /**
     * @var bool|null $allowAccessToDownloadsFolder This setting allows access to Downloads folder in file explorer.
    */
    private ?bool $allowAccessToDownloadsFolder = null;
    
    /**
     * @var array<WindowsKioskAppBase>|null $apps These are the only Windows Store Apps that will be available to launch from the Start menu. This collection can contain a maximum of 128 elements.
    */
    private ?array $apps = null;
    
    /**
     * @var bool|null $disallowDesktopApps This setting indicates that desktop apps are allowed. Default to true.
    */
    private ?bool $disallowDesktopApps = null;
    
    /**
     * @var bool|null $showTaskBar This setting allows the admin to specify whether the Task Bar is shown or not.
    */
    private ?bool $showTaskBar = null;
    
    /**
     * @var StreamInterface|null $startMenuLayoutXml Allows admins to override the default Start layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in Binary format.
    */
    private ?StreamInterface $startMenuLayoutXml = null;
    
    /**
     * Instantiates a new WindowsKioskMultipleApps and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsKioskMultipleApps');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsKioskMultipleApps
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsKioskMultipleApps {
        return new WindowsKioskMultipleApps();
    }

    /**
     * Gets the allowAccessToDownloadsFolder property value. This setting allows access to Downloads folder in file explorer.
     * @return bool|null
    */
    public function getAllowAccessToDownloadsFolder(): ?bool {
        return $this->allowAccessToDownloadsFolder;
    }

    /**
     * Gets the apps property value. These are the only Windows Store Apps that will be available to launch from the Start menu. This collection can contain a maximum of 128 elements.
     * @return array<WindowsKioskAppBase>|null
    */
    public function getApps(): ?array {
        return $this->apps;
    }

    /**
     * Gets the disallowDesktopApps property value. This setting indicates that desktop apps are allowed. Default to true.
     * @return bool|null
    */
    public function getDisallowDesktopApps(): ?bool {
        return $this->disallowDesktopApps;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowAccessToDownloadsFolder' => function (ParseNode $n) use ($o) { $o->setAllowAccessToDownloadsFolder($n->getBooleanValue()); },
            'apps' => function (ParseNode $n) use ($o) { $o->setApps($n->getCollectionOfObjectValues(array(WindowsKioskAppBase::class, 'createFromDiscriminatorValue'))); },
            'disallowDesktopApps' => function (ParseNode $n) use ($o) { $o->setDisallowDesktopApps($n->getBooleanValue()); },
            'showTaskBar' => function (ParseNode $n) use ($o) { $o->setShowTaskBar($n->getBooleanValue()); },
            'startMenuLayoutXml' => function (ParseNode $n) use ($o) { $o->setStartMenuLayoutXml($n->getBinaryContent()); },
        ]);
    }

    /**
     * Gets the showTaskBar property value. This setting allows the admin to specify whether the Task Bar is shown or not.
     * @return bool|null
    */
    public function getShowTaskBar(): ?bool {
        return $this->showTaskBar;
    }

    /**
     * Gets the startMenuLayoutXml property value. Allows admins to override the default Start layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in Binary format.
     * @return StreamInterface|null
    */
    public function getStartMenuLayoutXml(): ?StreamInterface {
        return $this->startMenuLayoutXml;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowAccessToDownloadsFolder', $this->allowAccessToDownloadsFolder);
        $writer->writeCollectionOfObjectValues('apps', $this->apps);
        $writer->writeBooleanValue('disallowDesktopApps', $this->disallowDesktopApps);
        $writer->writeBooleanValue('showTaskBar', $this->showTaskBar);
        $writer->writeBinaryContent('startMenuLayoutXml', $this->startMenuLayoutXml);
    }

    /**
     * Sets the allowAccessToDownloadsFolder property value. This setting allows access to Downloads folder in file explorer.
     *  @param bool|null $value Value to set for the allowAccessToDownloadsFolder property.
    */
    public function setAllowAccessToDownloadsFolder(?bool $value ): void {
        $this->allowAccessToDownloadsFolder = $value;
    }

    /**
     * Sets the apps property value. These are the only Windows Store Apps that will be available to launch from the Start menu. This collection can contain a maximum of 128 elements.
     *  @param array<WindowsKioskAppBase>|null $value Value to set for the apps property.
    */
    public function setApps(?array $value ): void {
        $this->apps = $value;
    }

    /**
     * Sets the disallowDesktopApps property value. This setting indicates that desktop apps are allowed. Default to true.
     *  @param bool|null $value Value to set for the disallowDesktopApps property.
    */
    public function setDisallowDesktopApps(?bool $value ): void {
        $this->disallowDesktopApps = $value;
    }

    /**
     * Sets the showTaskBar property value. This setting allows the admin to specify whether the Task Bar is shown or not.
     *  @param bool|null $value Value to set for the showTaskBar property.
    */
    public function setShowTaskBar(?bool $value ): void {
        $this->showTaskBar = $value;
    }

    /**
     * Sets the startMenuLayoutXml property value. Allows admins to override the default Start layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in Binary format.
     *  @param StreamInterface|null $value Value to set for the startMenuLayoutXml property.
    */
    public function setStartMenuLayoutXml(?StreamInterface $value ): void {
        $this->startMenuLayoutXml = $value;
    }

}
