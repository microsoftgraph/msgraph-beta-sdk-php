<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServicePrincipal File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* ServicePrincipal class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServicePrincipal extends DirectoryObject
{
    /**
    * Gets the passwordSingleSignOnSettings
    * The collection for settings related to password single sign-on. Use $select=passwordSingleSignOnSettings to read the property. Read-only for applicationTemplates except for custom applicationTemplates.
    *
    * @return PasswordSingleSignOnSettings|null The passwordSingleSignOnSettings
    */
    public function getPasswordSingleSignOnSettings()
    {
        if (array_key_exists("passwordSingleSignOnSettings", $this->_propDict) && !is_null($this->_propDict["passwordSingleSignOnSettings"])) {
            if (is_a($this->_propDict["passwordSingleSignOnSettings"], "\Beta\Microsoft\Graph\Model\PasswordSingleSignOnSettings")) {
                return $this->_propDict["passwordSingleSignOnSettings"];
            } else {
                $this->_propDict["passwordSingleSignOnSettings"] = new PasswordSingleSignOnSettings($this->_propDict["passwordSingleSignOnSettings"]);
                return $this->_propDict["passwordSingleSignOnSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the passwordSingleSignOnSettings
    * The collection for settings related to password single sign-on. Use $select=passwordSingleSignOnSettings to read the property. Read-only for applicationTemplates except for custom applicationTemplates.
    *
    * @param PasswordSingleSignOnSettings $val The passwordSingleSignOnSettings
    *
    * @return ServicePrincipal
    */
    public function setPasswordSingleSignOnSettings($val)
    {
        $this->_propDict["passwordSingleSignOnSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the accountEnabled
    * true if the service principal account is enabled; otherwise, false. Supports $filter (eq, ne, NOT, in).
    *
    * @return bool|null The accountEnabled
    */
    public function getAccountEnabled()
    {
        if (array_key_exists("accountEnabled", $this->_propDict)) {
            return $this->_propDict["accountEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountEnabled
    * true if the service principal account is enabled; otherwise, false. Supports $filter (eq, ne, NOT, in).
    *
    * @param bool $val The accountEnabled
    *
    * @return ServicePrincipal
    */
    public function setAccountEnabled($val)
    {
        $this->_propDict["accountEnabled"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the addIns
    * Defines custom behavior that a consuming service can use to call an app in specific contexts. For example, applications that can render file streams may set the addIns property for its 'FileHandler' functionality. This will let services like Microsoft 365 call the application in the context of a document the user is working on.
     *
     * @return AddIn[]|null The addIns
     */
    public function getAddIns()
    {
        if (array_key_exists('addIns', $this->_propDict) && !is_null($this->_propDict['addIns'])) {
            $addIns = [];
            if (count($this->_propDict['addIns']) > 0 && is_a($this->_propDict['addIns'][0], 'AddIn')) {
                return $this->_propDict['addIns'];
            }
            foreach ($this->_propDict['addIns'] as $singleValue) {
                $addIns []= new AddIn($singleValue);
            }
            $this->_propDict['addIns'] = $addIns;
            return $this->_propDict['addIns'];
        }
        return null;
    }
    
    /** 
    * Sets the addIns
    * Defines custom behavior that a consuming service can use to call an app in specific contexts. For example, applications that can render file streams may set the addIns property for its 'FileHandler' functionality. This will let services like Microsoft 365 call the application in the context of a document the user is working on.
    *
    * @param AddIn[] $val The addIns
    *
    * @return ServicePrincipal
    */
    public function setAddIns($val)
    {
        $this->_propDict["addIns"] = $val;
        return $this;
    }
    
    /**
    * Gets the alternativeNames
    * Used to retrieve service principals by subscription, identify resource group and full resource ids for managed identities. Supports $filter (eq, NOT, ge, le, startsWith).
    *
    * @return string|null The alternativeNames
    */
    public function getAlternativeNames()
    {
        if (array_key_exists("alternativeNames", $this->_propDict)) {
            return $this->_propDict["alternativeNames"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the alternativeNames
    * Used to retrieve service principals by subscription, identify resource group and full resource ids for managed identities. Supports $filter (eq, NOT, ge, le, startsWith).
    *
    * @param string $val The alternativeNames
    *
    * @return ServicePrincipal
    */
    public function setAlternativeNames($val)
    {
        $this->_propDict["alternativeNames"] = $val;
        return $this;
    }
    
    /**
    * Gets the appDescription
    * The description exposed by the associated application.
    *
    * @return string|null The appDescription
    */
    public function getAppDescription()
    {
        if (array_key_exists("appDescription", $this->_propDict)) {
            return $this->_propDict["appDescription"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appDescription
    * The description exposed by the associated application.
    *
    * @param string $val The appDescription
    *
    * @return ServicePrincipal
    */
    public function setAppDescription($val)
    {
        $this->_propDict["appDescription"] = $val;
        return $this;
    }
    
    /**
    * Gets the appDisplayName
    * The display name exposed by the associated application.
    *
    * @return string|null The appDisplayName
    */
    public function getAppDisplayName()
    {
        if (array_key_exists("appDisplayName", $this->_propDict)) {
            return $this->_propDict["appDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appDisplayName
    * The display name exposed by the associated application.
    *
    * @param string $val The appDisplayName
    *
    * @return ServicePrincipal
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the appId
    * The unique identifier for the associated application (its appId property).
    *
    * @return string|null The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appId
    * The unique identifier for the associated application (its appId property).
    *
    * @param string $val The appId
    *
    * @return ServicePrincipal
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }
    
    /**
    * Gets the applicationTemplateId
    * Unique identifier of the applicationTemplate that the servicePrincipal was created from. Read-only. Supports $filter (eq, ne, NOT, startsWith).
    *
    * @return string|null The applicationTemplateId
    */
    public function getApplicationTemplateId()
    {
        if (array_key_exists("applicationTemplateId", $this->_propDict)) {
            return $this->_propDict["applicationTemplateId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationTemplateId
    * Unique identifier of the applicationTemplate that the servicePrincipal was created from. Read-only. Supports $filter (eq, ne, NOT, startsWith).
    *
    * @param string $val The applicationTemplateId
    *
    * @return ServicePrincipal
    */
    public function setApplicationTemplateId($val)
    {
        $this->_propDict["applicationTemplateId"] = $val;
        return $this;
    }
    
    /**
    * Gets the appOwnerOrganizationId
    * Contains the tenant id where the application is registered. This is applicable only to service principals backed by applications. Supports $filter (eq, ne, NOT, ge, le).
    *
    * @return string|null The appOwnerOrganizationId
    */
    public function getAppOwnerOrganizationId()
    {
        if (array_key_exists("appOwnerOrganizationId", $this->_propDict)) {
            return $this->_propDict["appOwnerOrganizationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appOwnerOrganizationId
    * Contains the tenant id where the application is registered. This is applicable only to service principals backed by applications. Supports $filter (eq, ne, NOT, ge, le).
    *
    * @param string $val The appOwnerOrganizationId
    *
    * @return ServicePrincipal
    */
    public function setAppOwnerOrganizationId($val)
    {
        $this->_propDict["appOwnerOrganizationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the appRoleAssignmentRequired
    * Specifies whether users or other service principals need to be granted an app role assignment for this service principal before users can sign in or apps can get tokens. The default value is false. Not nullable. Supports $filter (eq, ne, NOT).
    *
    * @return bool|null The appRoleAssignmentRequired
    */
    public function getAppRoleAssignmentRequired()
    {
        if (array_key_exists("appRoleAssignmentRequired", $this->_propDict)) {
            return $this->_propDict["appRoleAssignmentRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appRoleAssignmentRequired
    * Specifies whether users or other service principals need to be granted an app role assignment for this service principal before users can sign in or apps can get tokens. The default value is false. Not nullable. Supports $filter (eq, ne, NOT).
    *
    * @param bool $val The appRoleAssignmentRequired
    *
    * @return ServicePrincipal
    */
    public function setAppRoleAssignmentRequired($val)
    {
        $this->_propDict["appRoleAssignmentRequired"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the appRoles
    * The roles exposed by the application which this service principal represents. For more information see the appRoles property definition on the application entity. Not nullable.
     *
     * @return AppRole[]|null The appRoles
     */
    public function getAppRoles()
    {
        if (array_key_exists('appRoles', $this->_propDict) && !is_null($this->_propDict['appRoles'])) {
            $appRoles = [];
            if (count($this->_propDict['appRoles']) > 0 && is_a($this->_propDict['appRoles'][0], 'AppRole')) {
                return $this->_propDict['appRoles'];
            }
            foreach ($this->_propDict['appRoles'] as $singleValue) {
                $appRoles []= new AppRole($singleValue);
            }
            $this->_propDict['appRoles'] = $appRoles;
            return $this->_propDict['appRoles'];
        }
        return null;
    }
    
    /** 
    * Sets the appRoles
    * The roles exposed by the application which this service principal represents. For more information see the appRoles property definition on the application entity. Not nullable.
    *
    * @param AppRole[] $val The appRoles
    *
    * @return ServicePrincipal
    */
    public function setAppRoles($val)
    {
        $this->_propDict["appRoles"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Free text field to provide an internal end-user facing description of the service principal. End-user portals such MyApps will display the application description in this field. The maximum allowed size is 1024 characters. Supports $filter (eq, ne, NOT, ge, le, startsWith) and $search.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * Free text field to provide an internal end-user facing description of the service principal. End-user portals such MyApps will display the application description in this field. The maximum allowed size is 1024 characters. Supports $filter (eq, ne, NOT, ge, le, startsWith) and $search.
    *
    * @param string $val The description
    *
    * @return ServicePrincipal
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the disabledByMicrosoftStatus
    * Specifies whether Microsoft has disabled the registered application. Possible values are: null (default value), NotDisabled, and DisabledDueToViolationOfServicesAgreement (reasons may include suspicious, abusive, or malicious activity, or a violation of the Microsoft Services Agreement).  Supports $filter (eq, ne, NOT).
    *
    * @return string|null The disabledByMicrosoftStatus
    */
    public function getDisabledByMicrosoftStatus()
    {
        if (array_key_exists("disabledByMicrosoftStatus", $this->_propDict)) {
            return $this->_propDict["disabledByMicrosoftStatus"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the disabledByMicrosoftStatus
    * Specifies whether Microsoft has disabled the registered application. Possible values are: null (default value), NotDisabled, and DisabledDueToViolationOfServicesAgreement (reasons may include suspicious, abusive, or malicious activity, or a violation of the Microsoft Services Agreement).  Supports $filter (eq, ne, NOT).
    *
    * @param string $val The disabledByMicrosoftStatus
    *
    * @return ServicePrincipal
    */
    public function setDisabledByMicrosoftStatus($val)
    {
        $this->_propDict["disabledByMicrosoftStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The display name for the service principal. Supports $filter (eq, ne, NOT, ge, le, in, startsWith), $search, and $orderBy.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * The display name for the service principal. Supports $filter (eq, ne, NOT, ge, le, in, startsWith), $search, and $orderBy.
    *
    * @param string $val The displayName
    *
    * @return ServicePrincipal
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the errorUrl
    * Deprecated. Don't use.
    *
    * @return string|null The errorUrl
    */
    public function getErrorUrl()
    {
        if (array_key_exists("errorUrl", $this->_propDict)) {
            return $this->_propDict["errorUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorUrl
    * Deprecated. Don't use.
    *
    * @param string $val The errorUrl
    *
    * @return ServicePrincipal
    */
    public function setErrorUrl($val)
    {
        $this->_propDict["errorUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the homepage
    * Home page or landing page of the application.
    *
    * @return string|null The homepage
    */
    public function getHomepage()
    {
        if (array_key_exists("homepage", $this->_propDict)) {
            return $this->_propDict["homepage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the homepage
    * Home page or landing page of the application.
    *
    * @param string $val The homepage
    *
    * @return ServicePrincipal
    */
    public function setHomepage($val)
    {
        $this->_propDict["homepage"] = $val;
        return $this;
    }
    
    /**
    * Gets the info
    * Basic profile information of the acquired application such as app's marketing, support, terms of service and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more info, see How to: Add Terms of service and privacy statement for registered Azure AD apps. Supports $filter (eq, ne, NOT, ge, le).
    *
    * @return InformationalUrl|null The info
    */
    public function getInfo()
    {
        if (array_key_exists("info", $this->_propDict) && !is_null($this->_propDict["info"])) {
            if (is_a($this->_propDict["info"], "\Beta\Microsoft\Graph\Model\InformationalUrl")) {
                return $this->_propDict["info"];
            } else {
                $this->_propDict["info"] = new InformationalUrl($this->_propDict["info"]);
                return $this->_propDict["info"];
            }
        }
        return null;
    }
    
    /**
    * Sets the info
    * Basic profile information of the acquired application such as app's marketing, support, terms of service and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more info, see How to: Add Terms of service and privacy statement for registered Azure AD apps. Supports $filter (eq, ne, NOT, ge, le).
    *
    * @param InformationalUrl $val The info
    *
    * @return ServicePrincipal
    */
    public function setInfo($val)
    {
        $this->_propDict["info"] = $val;
        return $this;
    }
    

     /** 
     * Gets the keyCredentials
    * The collection of key credentials associated with the service principal. Not nullable. Supports $filter (eq, NOT, ge, le).
     *
     * @return KeyCredential[]|null The keyCredentials
     */
    public function getKeyCredentials()
    {
        if (array_key_exists('keyCredentials', $this->_propDict) && !is_null($this->_propDict['keyCredentials'])) {
            $keyCredentials = [];
            if (count($this->_propDict['keyCredentials']) > 0 && is_a($this->_propDict['keyCredentials'][0], 'KeyCredential')) {
                return $this->_propDict['keyCredentials'];
            }
            foreach ($this->_propDict['keyCredentials'] as $singleValue) {
                $keyCredentials []= new KeyCredential($singleValue);
            }
            $this->_propDict['keyCredentials'] = $keyCredentials;
            return $this->_propDict['keyCredentials'];
        }
        return null;
    }
    
    /** 
    * Sets the keyCredentials
    * The collection of key credentials associated with the service principal. Not nullable. Supports $filter (eq, NOT, ge, le).
    *
    * @param KeyCredential[] $val The keyCredentials
    *
    * @return ServicePrincipal
    */
    public function setKeyCredentials($val)
    {
        $this->_propDict["keyCredentials"] = $val;
        return $this;
    }
    
    /**
    * Gets the loginUrl
    * Specifies the URL where the service provider redirects the user to Azure AD to authenticate. Azure AD uses the URL to launch the application from Microsoft 365 or the Azure AD My Apps. When blank, Azure AD performs IdP-initiated sign-on for applications configured with SAML-based single sign-on. The user launches the application from Microsoft 365, the Azure AD My Apps, or the Azure AD SSO URL.
    *
    * @return string|null The loginUrl
    */
    public function getLoginUrl()
    {
        if (array_key_exists("loginUrl", $this->_propDict)) {
            return $this->_propDict["loginUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the loginUrl
    * Specifies the URL where the service provider redirects the user to Azure AD to authenticate. Azure AD uses the URL to launch the application from Microsoft 365 or the Azure AD My Apps. When blank, Azure AD performs IdP-initiated sign-on for applications configured with SAML-based single sign-on. The user launches the application from Microsoft 365, the Azure AD My Apps, or the Azure AD SSO URL.
    *
    * @param string $val The loginUrl
    *
    * @return ServicePrincipal
    */
    public function setLoginUrl($val)
    {
        $this->_propDict["loginUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the logoutUrl
    * Specifies the URL that will be used by Microsoft's authorization service to logout an user using OpenId Connect front-channel, back-channel or SAML logout protocols.
    *
    * @return string|null The logoutUrl
    */
    public function getLogoutUrl()
    {
        if (array_key_exists("logoutUrl", $this->_propDict)) {
            return $this->_propDict["logoutUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the logoutUrl
    * Specifies the URL that will be used by Microsoft's authorization service to logout an user using OpenId Connect front-channel, back-channel or SAML logout protocols.
    *
    * @param string $val The logoutUrl
    *
    * @return ServicePrincipal
    */
    public function setLogoutUrl($val)
    {
        $this->_propDict["logoutUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the notes
    * Free text field to capture information about the service principal, typically used for operational purposes. Maximum allowed size is 1024 characters.
    *
    * @return string|null The notes
    */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
            return $this->_propDict["notes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notes
    * Free text field to capture information about the service principal, typically used for operational purposes. Maximum allowed size is 1024 characters.
    *
    * @param string $val The notes
    *
    * @return ServicePrincipal
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }
    
    /**
    * Gets the notificationEmailAddresses
    * Specifies the list of email addresses where Azure AD sends a notification when the active certificate is near the expiration date. This is only for the certificates used to sign the SAML token issued for Azure AD Gallery applications.
    *
    * @return string|null The notificationEmailAddresses
    */
    public function getNotificationEmailAddresses()
    {
        if (array_key_exists("notificationEmailAddresses", $this->_propDict)) {
            return $this->_propDict["notificationEmailAddresses"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notificationEmailAddresses
    * Specifies the list of email addresses where Azure AD sends a notification when the active certificate is near the expiration date. This is only for the certificates used to sign the SAML token issued for Azure AD Gallery applications.
    *
    * @param string $val The notificationEmailAddresses
    *
    * @return ServicePrincipal
    */
    public function setNotificationEmailAddresses($val)
    {
        $this->_propDict["notificationEmailAddresses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the passwordCredentials
    * The collection of password credentials associated with the application. Not nullable.
     *
     * @return PasswordCredential[]|null The passwordCredentials
     */
    public function getPasswordCredentials()
    {
        if (array_key_exists('passwordCredentials', $this->_propDict) && !is_null($this->_propDict['passwordCredentials'])) {
            $passwordCredentials = [];
            if (count($this->_propDict['passwordCredentials']) > 0 && is_a($this->_propDict['passwordCredentials'][0], 'PasswordCredential')) {
                return $this->_propDict['passwordCredentials'];
            }
            foreach ($this->_propDict['passwordCredentials'] as $singleValue) {
                $passwordCredentials []= new PasswordCredential($singleValue);
            }
            $this->_propDict['passwordCredentials'] = $passwordCredentials;
            return $this->_propDict['passwordCredentials'];
        }
        return null;
    }
    
    /** 
    * Sets the passwordCredentials
    * The collection of password credentials associated with the application. Not nullable.
    *
    * @param PasswordCredential[] $val The passwordCredentials
    *
    * @return ServicePrincipal
    */
    public function setPasswordCredentials($val)
    {
        $this->_propDict["passwordCredentials"] = $val;
        return $this;
    }
    
    /**
    * Gets the preferredSingleSignOnMode
    * Specifies the single sign-on mode configured for this application. Azure AD uses the preferred single sign-on mode to launch the application from Microsoft 365 or the Azure AD My Apps. The supported values are password, saml, notSupported, and oidc.
    *
    * @return string|null The preferredSingleSignOnMode
    */
    public function getPreferredSingleSignOnMode()
    {
        if (array_key_exists("preferredSingleSignOnMode", $this->_propDict)) {
            return $this->_propDict["preferredSingleSignOnMode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the preferredSingleSignOnMode
    * Specifies the single sign-on mode configured for this application. Azure AD uses the preferred single sign-on mode to launch the application from Microsoft 365 or the Azure AD My Apps. The supported values are password, saml, notSupported, and oidc.
    *
    * @param string $val The preferredSingleSignOnMode
    *
    * @return ServicePrincipal
    */
    public function setPreferredSingleSignOnMode($val)
    {
        $this->_propDict["preferredSingleSignOnMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the preferredTokenSigningKeyEndDateTime
    * Specifies the expiration date of the keyCredential used for token signing, marked by preferredTokenSigningKeyThumbprint.
    *
    * @return \DateTime|null The preferredTokenSigningKeyEndDateTime
    */
    public function getPreferredTokenSigningKeyEndDateTime()
    {
        if (array_key_exists("preferredTokenSigningKeyEndDateTime", $this->_propDict) && !is_null($this->_propDict["preferredTokenSigningKeyEndDateTime"])) {
            if (is_a($this->_propDict["preferredTokenSigningKeyEndDateTime"], "\DateTime")) {
                return $this->_propDict["preferredTokenSigningKeyEndDateTime"];
            } else {
                $this->_propDict["preferredTokenSigningKeyEndDateTime"] = new \DateTime($this->_propDict["preferredTokenSigningKeyEndDateTime"]);
                return $this->_propDict["preferredTokenSigningKeyEndDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the preferredTokenSigningKeyEndDateTime
    * Specifies the expiration date of the keyCredential used for token signing, marked by preferredTokenSigningKeyThumbprint.
    *
    * @param \DateTime $val The preferredTokenSigningKeyEndDateTime
    *
    * @return ServicePrincipal
    */
    public function setPreferredTokenSigningKeyEndDateTime($val)
    {
        $this->_propDict["preferredTokenSigningKeyEndDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the preferredTokenSigningKeyThumbprint
    * Reserved for internal use only. Do not write or otherwise rely on this property. May be removed in future versions.
    *
    * @return string|null The preferredTokenSigningKeyThumbprint
    */
    public function getPreferredTokenSigningKeyThumbprint()
    {
        if (array_key_exists("preferredTokenSigningKeyThumbprint", $this->_propDict)) {
            return $this->_propDict["preferredTokenSigningKeyThumbprint"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the preferredTokenSigningKeyThumbprint
    * Reserved for internal use only. Do not write or otherwise rely on this property. May be removed in future versions.
    *
    * @param string $val The preferredTokenSigningKeyThumbprint
    *
    * @return ServicePrincipal
    */
    public function setPreferredTokenSigningKeyThumbprint($val)
    {
        $this->_propDict["preferredTokenSigningKeyThumbprint"] = $val;
        return $this;
    }
    

     /** 
     * Gets the publishedPermissionScopes
    * The delegated permissions exposed by the application. For more information see the oauth2PermissionScopes property on the application entity's api property. Not nullable.
     *
     * @return PermissionScope[]|null The publishedPermissionScopes
     */
    public function getPublishedPermissionScopes()
    {
        if (array_key_exists('publishedPermissionScopes', $this->_propDict) && !is_null($this->_propDict['publishedPermissionScopes'])) {
            $publishedPermissionScopes = [];
            if (count($this->_propDict['publishedPermissionScopes']) > 0 && is_a($this->_propDict['publishedPermissionScopes'][0], 'PermissionScope')) {
                return $this->_propDict['publishedPermissionScopes'];
            }
            foreach ($this->_propDict['publishedPermissionScopes'] as $singleValue) {
                $publishedPermissionScopes []= new PermissionScope($singleValue);
            }
            $this->_propDict['publishedPermissionScopes'] = $publishedPermissionScopes;
            return $this->_propDict['publishedPermissionScopes'];
        }
        return null;
    }
    
    /** 
    * Sets the publishedPermissionScopes
    * The delegated permissions exposed by the application. For more information see the oauth2PermissionScopes property on the application entity's api property. Not nullable.
    *
    * @param PermissionScope[] $val The publishedPermissionScopes
    *
    * @return ServicePrincipal
    */
    public function setPublishedPermissionScopes($val)
    {
        $this->_propDict["publishedPermissionScopes"] = $val;
        return $this;
    }
    
    /**
    * Gets the publisherName
    *
    * @return string|null The publisherName
    */
    public function getPublisherName()
    {
        if (array_key_exists("publisherName", $this->_propDict)) {
            return $this->_propDict["publisherName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the publisherName
    *
    * @param string $val The publisherName
    *
    * @return ServicePrincipal
    */
    public function setPublisherName($val)
    {
        $this->_propDict["publisherName"] = $val;
        return $this;
    }
    
    /**
    * Gets the replyUrls
    * The URLs that user tokens are sent to for sign in with the associated application, or the redirect URIs that OAuth 2.0 authorization codes and access tokens are sent to for the associated application. Not nullable.
    *
    * @return string|null The replyUrls
    */
    public function getReplyUrls()
    {
        if (array_key_exists("replyUrls", $this->_propDict)) {
            return $this->_propDict["replyUrls"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the replyUrls
    * The URLs that user tokens are sent to for sign in with the associated application, or the redirect URIs that OAuth 2.0 authorization codes and access tokens are sent to for the associated application. Not nullable.
    *
    * @param string $val The replyUrls
    *
    * @return ServicePrincipal
    */
    public function setReplyUrls($val)
    {
        $this->_propDict["replyUrls"] = $val;
        return $this;
    }
    
    /**
    * Gets the samlMetadataUrl
    * The url where the service exposes SAML metadata for federation.
    *
    * @return string|null The samlMetadataUrl
    */
    public function getSamlMetadataUrl()
    {
        if (array_key_exists("samlMetadataUrl", $this->_propDict)) {
            return $this->_propDict["samlMetadataUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the samlMetadataUrl
    * The url where the service exposes SAML metadata for federation.
    *
    * @param string $val The samlMetadataUrl
    *
    * @return ServicePrincipal
    */
    public function setSamlMetadataUrl($val)
    {
        $this->_propDict["samlMetadataUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the samlSingleSignOnSettings
    * The collection for settings related to saml single sign-on.
    *
    * @return SamlSingleSignOnSettings|null The samlSingleSignOnSettings
    */
    public function getSamlSingleSignOnSettings()
    {
        if (array_key_exists("samlSingleSignOnSettings", $this->_propDict) && !is_null($this->_propDict["samlSingleSignOnSettings"])) {
            if (is_a($this->_propDict["samlSingleSignOnSettings"], "\Beta\Microsoft\Graph\Model\SamlSingleSignOnSettings")) {
                return $this->_propDict["samlSingleSignOnSettings"];
            } else {
                $this->_propDict["samlSingleSignOnSettings"] = new SamlSingleSignOnSettings($this->_propDict["samlSingleSignOnSettings"]);
                return $this->_propDict["samlSingleSignOnSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the samlSingleSignOnSettings
    * The collection for settings related to saml single sign-on.
    *
    * @param SamlSingleSignOnSettings $val The samlSingleSignOnSettings
    *
    * @return ServicePrincipal
    */
    public function setSamlSingleSignOnSettings($val)
    {
        $this->_propDict["samlSingleSignOnSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the servicePrincipalNames
    * Contains the list of identifiersUris, copied over from the associated application. Additional values can be added to hybrid applications. These values can be used to identify the permissions exposed by this app within Azure AD. For example,Client apps can specify a resource URI which is based on the values of this property to acquire an access token, which is the URI returned in the 'aud' claim.The any operator is required for filter expressions on multi-valued properties. Not nullable.  Supports $filter (eq, NOT, ge, le, startsWith).
    *
    * @return string|null The servicePrincipalNames
    */
    public function getServicePrincipalNames()
    {
        if (array_key_exists("servicePrincipalNames", $this->_propDict)) {
            return $this->_propDict["servicePrincipalNames"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the servicePrincipalNames
    * Contains the list of identifiersUris, copied over from the associated application. Additional values can be added to hybrid applications. These values can be used to identify the permissions exposed by this app within Azure AD. For example,Client apps can specify a resource URI which is based on the values of this property to acquire an access token, which is the URI returned in the 'aud' claim.The any operator is required for filter expressions on multi-valued properties. Not nullable.  Supports $filter (eq, NOT, ge, le, startsWith).
    *
    * @param string $val The servicePrincipalNames
    *
    * @return ServicePrincipal
    */
    public function setServicePrincipalNames($val)
    {
        $this->_propDict["servicePrincipalNames"] = $val;
        return $this;
    }
    
    /**
    * Gets the servicePrincipalType
    * Identifies whether the service principal represents an application, a managed identity, or a legacy application. This is set by Azure AD internally. The servicePrincipalType property can be set to three different values: __Application - A service principal that represents an application or service. The appId property identifies the associated app registration, and matches the appId of an application, possibly from a different tenant. If the associated app registration is missing, tokens are not issued for the service principal.__ManagedIdentity - A service principal that represents a managed identity. Service principals representing managed identities can be granted access and permissions, but cannot be updated or modified directly.__Legacy - A service principal that represents an app created before app registrations, or through legacy experiences. Legacy service principal can have credentials, service principal names, reply URLs, and other properties which are editable by an authorized user, but does not have an associated app registration. The appId value does not associate the service principal with an app registration. The service principal can only be used in the tenant where it was created.__SocialIdp - For internal use.
    *
    * @return string|null The servicePrincipalType
    */
    public function getServicePrincipalType()
    {
        if (array_key_exists("servicePrincipalType", $this->_propDict)) {
            return $this->_propDict["servicePrincipalType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the servicePrincipalType
    * Identifies whether the service principal represents an application, a managed identity, or a legacy application. This is set by Azure AD internally. The servicePrincipalType property can be set to three different values: __Application - A service principal that represents an application or service. The appId property identifies the associated app registration, and matches the appId of an application, possibly from a different tenant. If the associated app registration is missing, tokens are not issued for the service principal.__ManagedIdentity - A service principal that represents a managed identity. Service principals representing managed identities can be granted access and permissions, but cannot be updated or modified directly.__Legacy - A service principal that represents an app created before app registrations, or through legacy experiences. Legacy service principal can have credentials, service principal names, reply URLs, and other properties which are editable by an authorized user, but does not have an associated app registration. The appId value does not associate the service principal with an app registration. The service principal can only be used in the tenant where it was created.__SocialIdp - For internal use.
    *
    * @param string $val The servicePrincipalType
    *
    * @return ServicePrincipal
    */
    public function setServicePrincipalType($val)
    {
        $this->_propDict["servicePrincipalType"] = $val;
        return $this;
    }
    
    /**
    * Gets the signInAudience
    * Specifies the Microsoft accounts that are supported for the current application. Read-only. Supported values are:AzureADMyOrg: Users with a Microsoft work or school account in my organization’s Azure AD tenant (single-tenant).AzureADMultipleOrgs: Users with a Microsoft work or school account in any organization’s Azure AD tenant (multi-tenant).AzureADandPersonalMicrosoftAccount: Users with a personal Microsoft account, or a work or school account in any organization’s Azure AD tenant.PersonalMicrosoftAccount: Users with a personal Microsoft account only.
    *
    * @return string|null The signInAudience
    */
    public function getSignInAudience()
    {
        if (array_key_exists("signInAudience", $this->_propDict)) {
            return $this->_propDict["signInAudience"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the signInAudience
    * Specifies the Microsoft accounts that are supported for the current application. Read-only. Supported values are:AzureADMyOrg: Users with a Microsoft work or school account in my organization’s Azure AD tenant (single-tenant).AzureADMultipleOrgs: Users with a Microsoft work or school account in any organization’s Azure AD tenant (multi-tenant).AzureADandPersonalMicrosoftAccount: Users with a personal Microsoft account, or a work or school account in any organization’s Azure AD tenant.PersonalMicrosoftAccount: Users with a personal Microsoft account only.
    *
    * @param string $val The signInAudience
    *
    * @return ServicePrincipal
    */
    public function setSignInAudience($val)
    {
        $this->_propDict["signInAudience"] = $val;
        return $this;
    }
    
    /**
    * Gets the tags
    * Custom strings that can be used to categorize and identify the service principal. Not nullable. Supports $filter (eq, NOT, ge, le, startsWith).
    *
    * @return string|null The tags
    */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
            return $this->_propDict["tags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tags
    * Custom strings that can be used to categorize and identify the service principal. Not nullable. Supports $filter (eq, NOT, ge, le, startsWith).
    *
    * @param string $val The tags
    *
    * @return ServicePrincipal
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }
    
    /**
    * Gets the tokenEncryptionKeyId
    * Specifies the keyId of a public key from the keyCredentials collection. When configured, Azure AD issues tokens for this application encrypted using the key specified by this property. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user.
    *
    * @return string|null The tokenEncryptionKeyId
    */
    public function getTokenEncryptionKeyId()
    {
        if (array_key_exists("tokenEncryptionKeyId", $this->_propDict)) {
            return $this->_propDict["tokenEncryptionKeyId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tokenEncryptionKeyId
    * Specifies the keyId of a public key from the keyCredentials collection. When configured, Azure AD issues tokens for this application encrypted using the key specified by this property. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user.
    *
    * @param string $val The tokenEncryptionKeyId
    *
    * @return ServicePrincipal
    */
    public function setTokenEncryptionKeyId($val)
    {
        $this->_propDict["tokenEncryptionKeyId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appManagementPolicies
    * The appManagementPolicy applied to this service principal.
     *
     * @return AppManagementPolicy[]|null The appManagementPolicies
     */
    public function getAppManagementPolicies()
    {
        if (array_key_exists('appManagementPolicies', $this->_propDict) && !is_null($this->_propDict['appManagementPolicies'])) {
            $appManagementPolicies = [];
            if (count($this->_propDict['appManagementPolicies']) > 0 && is_a($this->_propDict['appManagementPolicies'][0], 'AppManagementPolicy')) {
                return $this->_propDict['appManagementPolicies'];
            }
            foreach ($this->_propDict['appManagementPolicies'] as $singleValue) {
                $appManagementPolicies []= new AppManagementPolicy($singleValue);
            }
            $this->_propDict['appManagementPolicies'] = $appManagementPolicies;
            return $this->_propDict['appManagementPolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the appManagementPolicies
    * The appManagementPolicy applied to this service principal.
    *
    * @param AppManagementPolicy[] $val The appManagementPolicies
    *
    * @return ServicePrincipal
    */
    public function setAppManagementPolicies($val)
    {
        $this->_propDict["appManagementPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appRoleAssignedTo
    * App role assignments for this app or service, granted to users, groups, and other service principals. Supports $expand.
     *
     * @return AppRoleAssignment[]|null The appRoleAssignedTo
     */
    public function getAppRoleAssignedTo()
    {
        if (array_key_exists('appRoleAssignedTo', $this->_propDict) && !is_null($this->_propDict['appRoleAssignedTo'])) {
            $appRoleAssignedTo = [];
            if (count($this->_propDict['appRoleAssignedTo']) > 0 && is_a($this->_propDict['appRoleAssignedTo'][0], 'AppRoleAssignment')) {
                return $this->_propDict['appRoleAssignedTo'];
            }
            foreach ($this->_propDict['appRoleAssignedTo'] as $singleValue) {
                $appRoleAssignedTo []= new AppRoleAssignment($singleValue);
            }
            $this->_propDict['appRoleAssignedTo'] = $appRoleAssignedTo;
            return $this->_propDict['appRoleAssignedTo'];
        }
        return null;
    }
    
    /** 
    * Sets the appRoleAssignedTo
    * App role assignments for this app or service, granted to users, groups, and other service principals. Supports $expand.
    *
    * @param AppRoleAssignment[] $val The appRoleAssignedTo
    *
    * @return ServicePrincipal
    */
    public function setAppRoleAssignedTo($val)
    {
        $this->_propDict["appRoleAssignedTo"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appRoleAssignments
    * App role assignment for another app or service, granted to this service principal. Supports $expand.
     *
     * @return AppRoleAssignment[]|null The appRoleAssignments
     */
    public function getAppRoleAssignments()
    {
        if (array_key_exists('appRoleAssignments', $this->_propDict) && !is_null($this->_propDict['appRoleAssignments'])) {
            $appRoleAssignments = [];
            if (count($this->_propDict['appRoleAssignments']) > 0 && is_a($this->_propDict['appRoleAssignments'][0], 'AppRoleAssignment')) {
                return $this->_propDict['appRoleAssignments'];
            }
            foreach ($this->_propDict['appRoleAssignments'] as $singleValue) {
                $appRoleAssignments []= new AppRoleAssignment($singleValue);
            }
            $this->_propDict['appRoleAssignments'] = $appRoleAssignments;
            return $this->_propDict['appRoleAssignments'];
        }
        return null;
    }
    
    /** 
    * Sets the appRoleAssignments
    * App role assignment for another app or service, granted to this service principal. Supports $expand.
    *
    * @param AppRoleAssignment[] $val The appRoleAssignments
    *
    * @return ServicePrincipal
    */
    public function setAppRoleAssignments($val)
    {
        $this->_propDict["appRoleAssignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the claimsMappingPolicies
    * The claimsMappingPolicies assigned to this service principal. Supports $expand.
     *
     * @return ClaimsMappingPolicy[]|null The claimsMappingPolicies
     */
    public function getClaimsMappingPolicies()
    {
        if (array_key_exists('claimsMappingPolicies', $this->_propDict) && !is_null($this->_propDict['claimsMappingPolicies'])) {
            $claimsMappingPolicies = [];
            if (count($this->_propDict['claimsMappingPolicies']) > 0 && is_a($this->_propDict['claimsMappingPolicies'][0], 'ClaimsMappingPolicy')) {
                return $this->_propDict['claimsMappingPolicies'];
            }
            foreach ($this->_propDict['claimsMappingPolicies'] as $singleValue) {
                $claimsMappingPolicies []= new ClaimsMappingPolicy($singleValue);
            }
            $this->_propDict['claimsMappingPolicies'] = $claimsMappingPolicies;
            return $this->_propDict['claimsMappingPolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the claimsMappingPolicies
    * The claimsMappingPolicies assigned to this service principal. Supports $expand.
    *
    * @param ClaimsMappingPolicy[] $val The claimsMappingPolicies
    *
    * @return ServicePrincipal
    */
    public function setClaimsMappingPolicies($val)
    {
        $this->_propDict["claimsMappingPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the createdObjects
    * Directory objects created by this service principal. Read-only. Nullable.
     *
     * @return DirectoryObject[]|null The createdObjects
     */
    public function getCreatedObjects()
    {
        if (array_key_exists('createdObjects', $this->_propDict) && !is_null($this->_propDict['createdObjects'])) {
            $createdObjects = [];
            if (count($this->_propDict['createdObjects']) > 0 && is_a($this->_propDict['createdObjects'][0], 'DirectoryObject')) {
                return $this->_propDict['createdObjects'];
            }
            foreach ($this->_propDict['createdObjects'] as $singleValue) {
                $createdObjects []= new DirectoryObject($singleValue);
            }
            $this->_propDict['createdObjects'] = $createdObjects;
            return $this->_propDict['createdObjects'];
        }
        return null;
    }
    
    /** 
    * Sets the createdObjects
    * Directory objects created by this service principal. Read-only. Nullable.
    *
    * @param DirectoryObject[] $val The createdObjects
    *
    * @return ServicePrincipal
    */
    public function setCreatedObjects($val)
    {
        $this->_propDict["createdObjects"] = $val;
        return $this;
    }
    

     /** 
     * Gets the delegatedPermissionClassifications
    * The permission classifications for delegated permissions exposed by the app that this service principal represents. Supports $expand.
     *
     * @return DelegatedPermissionClassification[]|null The delegatedPermissionClassifications
     */
    public function getDelegatedPermissionClassifications()
    {
        if (array_key_exists('delegatedPermissionClassifications', $this->_propDict) && !is_null($this->_propDict['delegatedPermissionClassifications'])) {
            $delegatedPermissionClassifications = [];
            if (count($this->_propDict['delegatedPermissionClassifications']) > 0 && is_a($this->_propDict['delegatedPermissionClassifications'][0], 'DelegatedPermissionClassification')) {
                return $this->_propDict['delegatedPermissionClassifications'];
            }
            foreach ($this->_propDict['delegatedPermissionClassifications'] as $singleValue) {
                $delegatedPermissionClassifications []= new DelegatedPermissionClassification($singleValue);
            }
            $this->_propDict['delegatedPermissionClassifications'] = $delegatedPermissionClassifications;
            return $this->_propDict['delegatedPermissionClassifications'];
        }
        return null;
    }
    
    /** 
    * Sets the delegatedPermissionClassifications
    * The permission classifications for delegated permissions exposed by the app that this service principal represents. Supports $expand.
    *
    * @param DelegatedPermissionClassification[] $val The delegatedPermissionClassifications
    *
    * @return ServicePrincipal
    */
    public function setDelegatedPermissionClassifications($val)
    {
        $this->_propDict["delegatedPermissionClassifications"] = $val;
        return $this;
    }
    

     /** 
     * Gets the endpoints
    * Endpoints available for discovery. Services like Sharepoint populate this property with a tenant specific SharePoint endpoints that other applications can discover and use in their experiences.
     *
     * @return Endpoint[]|null The endpoints
     */
    public function getEndpoints()
    {
        if (array_key_exists('endpoints', $this->_propDict) && !is_null($this->_propDict['endpoints'])) {
            $endpoints = [];
            if (count($this->_propDict['endpoints']) > 0 && is_a($this->_propDict['endpoints'][0], 'Endpoint')) {
                return $this->_propDict['endpoints'];
            }
            foreach ($this->_propDict['endpoints'] as $singleValue) {
                $endpoints []= new Endpoint($singleValue);
            }
            $this->_propDict['endpoints'] = $endpoints;
            return $this->_propDict['endpoints'];
        }
        return null;
    }
    
    /** 
    * Sets the endpoints
    * Endpoints available for discovery. Services like Sharepoint populate this property with a tenant specific SharePoint endpoints that other applications can discover and use in their experiences.
    *
    * @param Endpoint[] $val The endpoints
    *
    * @return ServicePrincipal
    */
    public function setEndpoints($val)
    {
        $this->_propDict["endpoints"] = $val;
        return $this;
    }
    

     /** 
     * Gets the homeRealmDiscoveryPolicies
    * The homeRealmDiscoveryPolicies assigned to this service principal. Supports $expand.
     *
     * @return HomeRealmDiscoveryPolicy[]|null The homeRealmDiscoveryPolicies
     */
    public function getHomeRealmDiscoveryPolicies()
    {
        if (array_key_exists('homeRealmDiscoveryPolicies', $this->_propDict) && !is_null($this->_propDict['homeRealmDiscoveryPolicies'])) {
            $homeRealmDiscoveryPolicies = [];
            if (count($this->_propDict['homeRealmDiscoveryPolicies']) > 0 && is_a($this->_propDict['homeRealmDiscoveryPolicies'][0], 'HomeRealmDiscoveryPolicy')) {
                return $this->_propDict['homeRealmDiscoveryPolicies'];
            }
            foreach ($this->_propDict['homeRealmDiscoveryPolicies'] as $singleValue) {
                $homeRealmDiscoveryPolicies []= new HomeRealmDiscoveryPolicy($singleValue);
            }
            $this->_propDict['homeRealmDiscoveryPolicies'] = $homeRealmDiscoveryPolicies;
            return $this->_propDict['homeRealmDiscoveryPolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the homeRealmDiscoveryPolicies
    * The homeRealmDiscoveryPolicies assigned to this service principal. Supports $expand.
    *
    * @param HomeRealmDiscoveryPolicy[] $val The homeRealmDiscoveryPolicies
    *
    * @return ServicePrincipal
    */
    public function setHomeRealmDiscoveryPolicies($val)
    {
        $this->_propDict["homeRealmDiscoveryPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the licenseDetails
     *
     * @return LicenseDetails[]|null The licenseDetails
     */
    public function getLicenseDetails()
    {
        if (array_key_exists('licenseDetails', $this->_propDict) && !is_null($this->_propDict['licenseDetails'])) {
            $licenseDetails = [];
            if (count($this->_propDict['licenseDetails']) > 0 && is_a($this->_propDict['licenseDetails'][0], 'LicenseDetails')) {
                return $this->_propDict['licenseDetails'];
            }
            foreach ($this->_propDict['licenseDetails'] as $singleValue) {
                $licenseDetails []= new LicenseDetails($singleValue);
            }
            $this->_propDict['licenseDetails'] = $licenseDetails;
            return $this->_propDict['licenseDetails'];
        }
        return null;
    }
    
    /** 
    * Sets the licenseDetails
    *
    * @param LicenseDetails[] $val The licenseDetails
    *
    * @return ServicePrincipal
    */
    public function setLicenseDetails($val)
    {
        $this->_propDict["licenseDetails"] = $val;
        return $this;
    }
    

     /** 
     * Gets the memberOf
    * Roles that this service principal is a member of. HTTP Methods: GET Read-only. Nullable. Supports $expand.
     *
     * @return DirectoryObject[]|null The memberOf
     */
    public function getMemberOf()
    {
        if (array_key_exists('memberOf', $this->_propDict) && !is_null($this->_propDict['memberOf'])) {
            $memberOf = [];
            if (count($this->_propDict['memberOf']) > 0 && is_a($this->_propDict['memberOf'][0], 'DirectoryObject')) {
                return $this->_propDict['memberOf'];
            }
            foreach ($this->_propDict['memberOf'] as $singleValue) {
                $memberOf []= new DirectoryObject($singleValue);
            }
            $this->_propDict['memberOf'] = $memberOf;
            return $this->_propDict['memberOf'];
        }
        return null;
    }
    
    /** 
    * Sets the memberOf
    * Roles that this service principal is a member of. HTTP Methods: GET Read-only. Nullable. Supports $expand.
    *
    * @param DirectoryObject[] $val The memberOf
    *
    * @return ServicePrincipal
    */
    public function setMemberOf($val)
    {
        $this->_propDict["memberOf"] = $val;
        return $this;
    }
    

     /** 
     * Gets the oauth2PermissionGrants
    * Delegated permission grants authorizing this service principal to access an API on behalf of a signed-in user. Read-only. Nullable.
     *
     * @return OAuth2PermissionGrant[]|null The oauth2PermissionGrants
     */
    public function getOauth2PermissionGrants()
    {
        if (array_key_exists('oauth2PermissionGrants', $this->_propDict) && !is_null($this->_propDict['oauth2PermissionGrants'])) {
            $oauth2PermissionGrants = [];
            if (count($this->_propDict['oauth2PermissionGrants']) > 0 && is_a($this->_propDict['oauth2PermissionGrants'][0], 'OAuth2PermissionGrant')) {
                return $this->_propDict['oauth2PermissionGrants'];
            }
            foreach ($this->_propDict['oauth2PermissionGrants'] as $singleValue) {
                $oauth2PermissionGrants []= new OAuth2PermissionGrant($singleValue);
            }
            $this->_propDict['oauth2PermissionGrants'] = $oauth2PermissionGrants;
            return $this->_propDict['oauth2PermissionGrants'];
        }
        return null;
    }
    
    /** 
    * Sets the oauth2PermissionGrants
    * Delegated permission grants authorizing this service principal to access an API on behalf of a signed-in user. Read-only. Nullable.
    *
    * @param OAuth2PermissionGrant[] $val The oauth2PermissionGrants
    *
    * @return ServicePrincipal
    */
    public function setOauth2PermissionGrants($val)
    {
        $this->_propDict["oauth2PermissionGrants"] = $val;
        return $this;
    }
    

     /** 
     * Gets the ownedObjects
    * Directory objects that are owned by this service principal. Read-only. Nullable. Supports $expand.
     *
     * @return DirectoryObject[]|null The ownedObjects
     */
    public function getOwnedObjects()
    {
        if (array_key_exists('ownedObjects', $this->_propDict) && !is_null($this->_propDict['ownedObjects'])) {
            $ownedObjects = [];
            if (count($this->_propDict['ownedObjects']) > 0 && is_a($this->_propDict['ownedObjects'][0], 'DirectoryObject')) {
                return $this->_propDict['ownedObjects'];
            }
            foreach ($this->_propDict['ownedObjects'] as $singleValue) {
                $ownedObjects []= new DirectoryObject($singleValue);
            }
            $this->_propDict['ownedObjects'] = $ownedObjects;
            return $this->_propDict['ownedObjects'];
        }
        return null;
    }
    
    /** 
    * Sets the ownedObjects
    * Directory objects that are owned by this service principal. Read-only. Nullable. Supports $expand.
    *
    * @param DirectoryObject[] $val The ownedObjects
    *
    * @return ServicePrincipal
    */
    public function setOwnedObjects($val)
    {
        $this->_propDict["ownedObjects"] = $val;
        return $this;
    }
    

     /** 
     * Gets the owners
    * Directory objects that are owners of this servicePrincipal. The owners are a set of non-admin users or servicePrincipals who are allowed to modify this object. Read-only. Nullable. Supports $expand.
     *
     * @return DirectoryObject[]|null The owners
     */
    public function getOwners()
    {
        if (array_key_exists('owners', $this->_propDict) && !is_null($this->_propDict['owners'])) {
            $owners = [];
            if (count($this->_propDict['owners']) > 0 && is_a($this->_propDict['owners'][0], 'DirectoryObject')) {
                return $this->_propDict['owners'];
            }
            foreach ($this->_propDict['owners'] as $singleValue) {
                $owners []= new DirectoryObject($singleValue);
            }
            $this->_propDict['owners'] = $owners;
            return $this->_propDict['owners'];
        }
        return null;
    }
    
    /** 
    * Sets the owners
    * Directory objects that are owners of this servicePrincipal. The owners are a set of non-admin users or servicePrincipals who are allowed to modify this object. Read-only. Nullable. Supports $expand.
    *
    * @param DirectoryObject[] $val The owners
    *
    * @return ServicePrincipal
    */
    public function setOwners($val)
    {
        $this->_propDict["owners"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tokenIssuancePolicies
    * The tokenIssuancePolicies assigned to this service principal.
     *
     * @return TokenIssuancePolicy[]|null The tokenIssuancePolicies
     */
    public function getTokenIssuancePolicies()
    {
        if (array_key_exists('tokenIssuancePolicies', $this->_propDict) && !is_null($this->_propDict['tokenIssuancePolicies'])) {
            $tokenIssuancePolicies = [];
            if (count($this->_propDict['tokenIssuancePolicies']) > 0 && is_a($this->_propDict['tokenIssuancePolicies'][0], 'TokenIssuancePolicy')) {
                return $this->_propDict['tokenIssuancePolicies'];
            }
            foreach ($this->_propDict['tokenIssuancePolicies'] as $singleValue) {
                $tokenIssuancePolicies []= new TokenIssuancePolicy($singleValue);
            }
            $this->_propDict['tokenIssuancePolicies'] = $tokenIssuancePolicies;
            return $this->_propDict['tokenIssuancePolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the tokenIssuancePolicies
    * The tokenIssuancePolicies assigned to this service principal.
    *
    * @param TokenIssuancePolicy[] $val The tokenIssuancePolicies
    *
    * @return ServicePrincipal
    */
    public function setTokenIssuancePolicies($val)
    {
        $this->_propDict["tokenIssuancePolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tokenLifetimePolicies
    * The tokenLifetimePolicies assigned to this service principal.
     *
     * @return TokenLifetimePolicy[]|null The tokenLifetimePolicies
     */
    public function getTokenLifetimePolicies()
    {
        if (array_key_exists('tokenLifetimePolicies', $this->_propDict) && !is_null($this->_propDict['tokenLifetimePolicies'])) {
            $tokenLifetimePolicies = [];
            if (count($this->_propDict['tokenLifetimePolicies']) > 0 && is_a($this->_propDict['tokenLifetimePolicies'][0], 'TokenLifetimePolicy')) {
                return $this->_propDict['tokenLifetimePolicies'];
            }
            foreach ($this->_propDict['tokenLifetimePolicies'] as $singleValue) {
                $tokenLifetimePolicies []= new TokenLifetimePolicy($singleValue);
            }
            $this->_propDict['tokenLifetimePolicies'] = $tokenLifetimePolicies;
            return $this->_propDict['tokenLifetimePolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the tokenLifetimePolicies
    * The tokenLifetimePolicies assigned to this service principal.
    *
    * @param TokenLifetimePolicy[] $val The tokenLifetimePolicies
    *
    * @return ServicePrincipal
    */
    public function setTokenLifetimePolicies($val)
    {
        $this->_propDict["tokenLifetimePolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the transitiveMemberOf
     *
     * @return DirectoryObject[]|null The transitiveMemberOf
     */
    public function getTransitiveMemberOf()
    {
        if (array_key_exists('transitiveMemberOf', $this->_propDict) && !is_null($this->_propDict['transitiveMemberOf'])) {
            $transitiveMemberOf = [];
            if (count($this->_propDict['transitiveMemberOf']) > 0 && is_a($this->_propDict['transitiveMemberOf'][0], 'DirectoryObject')) {
                return $this->_propDict['transitiveMemberOf'];
            }
            foreach ($this->_propDict['transitiveMemberOf'] as $singleValue) {
                $transitiveMemberOf []= new DirectoryObject($singleValue);
            }
            $this->_propDict['transitiveMemberOf'] = $transitiveMemberOf;
            return $this->_propDict['transitiveMemberOf'];
        }
        return null;
    }
    
    /** 
    * Sets the transitiveMemberOf
    *
    * @param DirectoryObject[] $val The transitiveMemberOf
    *
    * @return ServicePrincipal
    */
    public function setTransitiveMemberOf($val)
    {
        $this->_propDict["transitiveMemberOf"] = $val;
        return $this;
    }
    
    /**
    * Gets the synchronization
    *
    * @return Synchronization|null The synchronization
    */
    public function getSynchronization()
    {
        if (array_key_exists("synchronization", $this->_propDict) && !is_null($this->_propDict["synchronization"])) {
            if (is_a($this->_propDict["synchronization"], "\Beta\Microsoft\Graph\Model\Synchronization")) {
                return $this->_propDict["synchronization"];
            } else {
                $this->_propDict["synchronization"] = new Synchronization($this->_propDict["synchronization"]);
                return $this->_propDict["synchronization"];
            }
        }
        return null;
    }
    
    /**
    * Sets the synchronization
    *
    * @param Synchronization $val The synchronization
    *
    * @return ServicePrincipal
    */
    public function setSynchronization($val)
    {
        $this->_propDict["synchronization"] = $val;
        return $this;
    }
    
}
