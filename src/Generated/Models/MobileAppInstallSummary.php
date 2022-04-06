<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppInstallSummary extends Entity 
{
    /** @var int|null $failedDeviceCount Number of Devices that have failed to install this app. */
    private ?int $failedDeviceCount = null;
    
    /** @var int|null $failedUserCount Number of Users that have 1 or more device that failed to install this app. */
    private ?int $failedUserCount = null;
    
    /** @var int|null $installedDeviceCount Number of Devices that have successfully installed this app. */
    private ?int $installedDeviceCount = null;
    
    /** @var int|null $installedUserCount Number of Users whose devices have all succeeded to install this app. */
    private ?int $installedUserCount = null;
    
    /** @var int|null $notApplicableDeviceCount Number of Devices that are not applicable for this app. */
    private ?int $notApplicableDeviceCount = null;
    
    /** @var int|null $notApplicableUserCount Number of Users whose devices were all not applicable for this app. */
    private ?int $notApplicableUserCount = null;
    
    /** @var int|null $notInstalledDeviceCount Number of Devices that does not have this app installed. */
    private ?int $notInstalledDeviceCount = null;
    
    /** @var int|null $notInstalledUserCount Number of Users that have 1 or more devices that did not install this app. */
    private ?int $notInstalledUserCount = null;
    
    /** @var int|null $pendingInstallDeviceCount Number of Devices that have been notified to install this app. */
    private ?int $pendingInstallDeviceCount = null;
    
    /** @var int|null $pendingInstallUserCount Number of Users that have 1 or more device that have been notified to install this app and have 0 devices with failures. */
    private ?int $pendingInstallUserCount = null;
    
    /**
     * Instantiates a new mobileAppInstallSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppInstallSummary
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppInstallSummary {
        return new MobileAppInstallSummary();
    }

    /**
     * Gets the failedDeviceCount property value. Number of Devices that have failed to install this app.
     * @return int|null
    */
    public function getFailedDeviceCount(): ?int {
        return $this->failedDeviceCount;
    }

    /**
     * Gets the failedUserCount property value. Number of Users that have 1 or more device that failed to install this app.
     * @return int|null
    */
    public function getFailedUserCount(): ?int {
        return $this->failedUserCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'failedDeviceCount' => function (self $o, ParseNode $n) { $o->setFailedDeviceCount($n->getIntegerValue()); },
            'failedUserCount' => function (self $o, ParseNode $n) { $o->setFailedUserCount($n->getIntegerValue()); },
            'installedDeviceCount' => function (self $o, ParseNode $n) { $o->setInstalledDeviceCount($n->getIntegerValue()); },
            'installedUserCount' => function (self $o, ParseNode $n) { $o->setInstalledUserCount($n->getIntegerValue()); },
            'notApplicableDeviceCount' => function (self $o, ParseNode $n) { $o->setNotApplicableDeviceCount($n->getIntegerValue()); },
            'notApplicableUserCount' => function (self $o, ParseNode $n) { $o->setNotApplicableUserCount($n->getIntegerValue()); },
            'notInstalledDeviceCount' => function (self $o, ParseNode $n) { $o->setNotInstalledDeviceCount($n->getIntegerValue()); },
            'notInstalledUserCount' => function (self $o, ParseNode $n) { $o->setNotInstalledUserCount($n->getIntegerValue()); },
            'pendingInstallDeviceCount' => function (self $o, ParseNode $n) { $o->setPendingInstallDeviceCount($n->getIntegerValue()); },
            'pendingInstallUserCount' => function (self $o, ParseNode $n) { $o->setPendingInstallUserCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the installedDeviceCount property value. Number of Devices that have successfully installed this app.
     * @return int|null
    */
    public function getInstalledDeviceCount(): ?int {
        return $this->installedDeviceCount;
    }

    /**
     * Gets the installedUserCount property value. Number of Users whose devices have all succeeded to install this app.
     * @return int|null
    */
    public function getInstalledUserCount(): ?int {
        return $this->installedUserCount;
    }

    /**
     * Gets the notApplicableDeviceCount property value. Number of Devices that are not applicable for this app.
     * @return int|null
    */
    public function getNotApplicableDeviceCount(): ?int {
        return $this->notApplicableDeviceCount;
    }

    /**
     * Gets the notApplicableUserCount property value. Number of Users whose devices were all not applicable for this app.
     * @return int|null
    */
    public function getNotApplicableUserCount(): ?int {
        return $this->notApplicableUserCount;
    }

    /**
     * Gets the notInstalledDeviceCount property value. Number of Devices that does not have this app installed.
     * @return int|null
    */
    public function getNotInstalledDeviceCount(): ?int {
        return $this->notInstalledDeviceCount;
    }

    /**
     * Gets the notInstalledUserCount property value. Number of Users that have 1 or more devices that did not install this app.
     * @return int|null
    */
    public function getNotInstalledUserCount(): ?int {
        return $this->notInstalledUserCount;
    }

    /**
     * Gets the pendingInstallDeviceCount property value. Number of Devices that have been notified to install this app.
     * @return int|null
    */
    public function getPendingInstallDeviceCount(): ?int {
        return $this->pendingInstallDeviceCount;
    }

    /**
     * Gets the pendingInstallUserCount property value. Number of Users that have 1 or more device that have been notified to install this app and have 0 devices with failures.
     * @return int|null
    */
    public function getPendingInstallUserCount(): ?int {
        return $this->pendingInstallUserCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('failedDeviceCount', $this->failedDeviceCount);
        $writer->writeIntegerValue('failedUserCount', $this->failedUserCount);
        $writer->writeIntegerValue('installedDeviceCount', $this->installedDeviceCount);
        $writer->writeIntegerValue('installedUserCount', $this->installedUserCount);
        $writer->writeIntegerValue('notApplicableDeviceCount', $this->notApplicableDeviceCount);
        $writer->writeIntegerValue('notApplicableUserCount', $this->notApplicableUserCount);
        $writer->writeIntegerValue('notInstalledDeviceCount', $this->notInstalledDeviceCount);
        $writer->writeIntegerValue('notInstalledUserCount', $this->notInstalledUserCount);
        $writer->writeIntegerValue('pendingInstallDeviceCount', $this->pendingInstallDeviceCount);
        $writer->writeIntegerValue('pendingInstallUserCount', $this->pendingInstallUserCount);
    }

    /**
     * Sets the failedDeviceCount property value. Number of Devices that have failed to install this app.
     *  @param int|null $value Value to set for the failedDeviceCount property.
    */
    public function setFailedDeviceCount(?int $value ): void {
        $this->failedDeviceCount = $value;
    }

    /**
     * Sets the failedUserCount property value. Number of Users that have 1 or more device that failed to install this app.
     *  @param int|null $value Value to set for the failedUserCount property.
    */
    public function setFailedUserCount(?int $value ): void {
        $this->failedUserCount = $value;
    }

    /**
     * Sets the installedDeviceCount property value. Number of Devices that have successfully installed this app.
     *  @param int|null $value Value to set for the installedDeviceCount property.
    */
    public function setInstalledDeviceCount(?int $value ): void {
        $this->installedDeviceCount = $value;
    }

    /**
     * Sets the installedUserCount property value. Number of Users whose devices have all succeeded to install this app.
     *  @param int|null $value Value to set for the installedUserCount property.
    */
    public function setInstalledUserCount(?int $value ): void {
        $this->installedUserCount = $value;
    }

    /**
     * Sets the notApplicableDeviceCount property value. Number of Devices that are not applicable for this app.
     *  @param int|null $value Value to set for the notApplicableDeviceCount property.
    */
    public function setNotApplicableDeviceCount(?int $value ): void {
        $this->notApplicableDeviceCount = $value;
    }

    /**
     * Sets the notApplicableUserCount property value. Number of Users whose devices were all not applicable for this app.
     *  @param int|null $value Value to set for the notApplicableUserCount property.
    */
    public function setNotApplicableUserCount(?int $value ): void {
        $this->notApplicableUserCount = $value;
    }

    /**
     * Sets the notInstalledDeviceCount property value. Number of Devices that does not have this app installed.
     *  @param int|null $value Value to set for the notInstalledDeviceCount property.
    */
    public function setNotInstalledDeviceCount(?int $value ): void {
        $this->notInstalledDeviceCount = $value;
    }

    /**
     * Sets the notInstalledUserCount property value. Number of Users that have 1 or more devices that did not install this app.
     *  @param int|null $value Value to set for the notInstalledUserCount property.
    */
    public function setNotInstalledUserCount(?int $value ): void {
        $this->notInstalledUserCount = $value;
    }

    /**
     * Sets the pendingInstallDeviceCount property value. Number of Devices that have been notified to install this app.
     *  @param int|null $value Value to set for the pendingInstallDeviceCount property.
    */
    public function setPendingInstallDeviceCount(?int $value ): void {
        $this->pendingInstallDeviceCount = $value;
    }

    /**
     * Sets the pendingInstallUserCount property value. Number of Users that have 1 or more device that have been notified to install this app and have 0 devices with failures.
     *  @param int|null $value Value to set for the pendingInstallUserCount property.
    */
    public function setPendingInstallUserCount(?int $value ): void {
        $this->pendingInstallUserCount = $value;
    }

}
