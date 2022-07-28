<?php
namespace Aws\CognitoIdentityProvider;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Cognito Identity Provider** service.
 * 
 * @method \Aws\Result addCustomAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addCustomAttributesAsync(array $args = [])
 * @method \Aws\Result adminAddUserToGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminAddUserToGroupAsync(array $args = [])
 * @method \Aws\Result adminConfirmSignUp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminConfirmSignUpAsync(array $args = [])
 * @method \Aws\Result adminCreateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminCreateUserAsync(array $args = [])
 * @method \Aws\Result adminDeleteUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminDeleteUserAsync(array $args = [])
 * @method \Aws\Result adminDeleteUserAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminDeleteUserAttributesAsync(array $args = [])
 * @method \Aws\Result adminDisableProviderForUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminDisableProviderForUserAsync(array $args = [])
 * @method \Aws\Result adminDisableUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminDisableUserAsync(array $args = [])
 * @method \Aws\Result adminEnableUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminEnableUserAsync(array $args = [])
 * @method \Aws\Result adminForgetDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminForgetDeviceAsync(array $args = [])
 * @method \Aws\Result adminGetDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminGetDeviceAsync(array $args = [])
 * @method \Aws\Result adminGetUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminGetUserAsync(array $args = [])
 * @method \Aws\Result adminInitiateAuth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminInitiateAuthAsync(array $args = [])
 * @method \Aws\Result adminLinkProviderForUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminLinkProviderForUserAsync(array $args = [])
 * @method \Aws\Result adminListDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminListDevicesAsync(array $args = [])
 * @method \Aws\Result adminListGroupsForUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminListGroupsForUserAsync(array $args = [])
 * @method \Aws\Result adminListUserAuthEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminListUserAuthEventsAsync(array $args = [])
 * @method \Aws\Result adminRemoveUserFromGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminRemoveUserFromGroupAsync(array $args = [])
 * @method \Aws\Result adminResetUserPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminResetUserPasswordAsync(array $args = [])
 * @method \Aws\Result adminRespondToAuthChallenge(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminRespondToAuthChallengeAsync(array $args = [])
 * @method \Aws\Result adminSetUserMFAPreference(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminSetUserMFAPreferenceAsync(array $args = [])
 * @method \Aws\Result adminSetUserPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminSetUserPasswordAsync(array $args = [])
 * @method \Aws\Result adminSetUserSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminSetUserSettingsAsync(array $args = [])
 * @method \Aws\Result adminUpdateAuthEventFeedback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminUpdateAuthEventFeedbackAsync(array $args = [])
 * @method \Aws\Result adminUpdateDeviceStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminUpdateDeviceStatusAsync(array $args = [])
 * @method \Aws\Result adminUpdateUserAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminUpdateUserAttributesAsync(array $args = [])
 * @method \Aws\Result adminUserGlobalSignOut(array $args = [])
 * @method \GuzzleHttp\Promise\Promise adminUserGlobalSignOutAsync(array $args = [])
 * @method \Aws\Result associateSoftwareToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateSoftwareTokenAsync(array $args = [])
 * @method \Aws\Result changePassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changePasswordAsync(array $args = [])
 * @method \Aws\Result confirmDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise confirmDeviceAsync(array $args = [])
 * @method \Aws\Result confirmForgotPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise confirmForgotPasswordAsync(array $args = [])
 * @method \Aws\Result confirmSignUp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise confirmSignUpAsync(array $args = [])
 * @method \Aws\Result createGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupAsync(array $args = [])
 * @method \Aws\Result createIdentityProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIdentityProviderAsync(array $args = [])
 * @method \Aws\Result createResourceServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceServerAsync(array $args = [])
 * @method \Aws\Result createUserImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserImportJobAsync(array $args = [])
 * @method \Aws\Result createUserPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserPoolAsync(array $args = [])
 * @method \Aws\Result createUserPoolClient(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserPoolClientAsync(array $args = [])
 * @method \Aws\Result createUserPoolDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserPoolDomainAsync(array $args = [])
 * @method \Aws\Result deleteGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGroupAsync(array $args = [])
 * @method \Aws\Result deleteIdentityProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIdentityProviderAsync(array $args = [])
 * @method \Aws\Result deleteResourceServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourceServerAsync(array $args = [])
 * @method \Aws\Result deleteUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \Aws\Result deleteUserAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAttributesAsync(array $args = [])
 * @method \Aws\Result deleteUserPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserPoolAsync(array $args = [])
 * @method \Aws\Result deleteUserPoolClient(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserPoolClientAsync(array $args = [])
 * @method \Aws\Result deleteUserPoolDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserPoolDomainAsync(array $args = [])
 * @method \Aws\Result describeIdentityProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIdentityProviderAsync(array $args = [])
 * @method \Aws\Result describeResourceServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeResourceServerAsync(array $args = [])
 * @method \Aws\Result describeRiskConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRiskConfigurationAsync(array $args = [])
 * @method \Aws\Result describeUserImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserImportJobAsync(array $args = [])
 * @method \Aws\Result describeUserPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserPoolAsync(array $args = [])
 * @method \Aws\Result describeUserPoolClient(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserPoolClientAsync(array $args = [])
 * @method \Aws\Result describeUserPoolDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserPoolDomainAsync(array $args = [])
 * @method \Aws\Result forgetDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise forgetDeviceAsync(array $args = [])
 * @method \Aws\Result forgotPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise forgotPasswordAsync(array $args = [])
 * @method \Aws\Result getCSVHeader(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCSVHeaderAsync(array $args = [])
 * @method \Aws\Result getDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceAsync(array $args = [])
 * @method \Aws\Result getGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupAsync(array $args = [])
 * @method \Aws\Result getIdentityProviderByIdentifier(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdentityProviderByIdentifierAsync(array $args = [])
 * @method \Aws\Result getSigningCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSigningCertificateAsync(array $args = [])
 * @method \Aws\Result getUICustomization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUICustomizationAsync(array $args = [])
 * @method \Aws\Result getUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserAsync(array $args = [])
 * @method \Aws\Result getUserAttributeVerificationCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserAttributeVerificationCodeAsync(array $args = [])
 * @method \Aws\Result getUserPoolMfaConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserPoolMfaConfigAsync(array $args = [])
 * @method \Aws\Result globalSignOut(array $args = [])
 * @method \GuzzleHttp\Promise\Promise globalSignOutAsync(array $args = [])
 * @method \Aws\Result initiateAuth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise initiateAuthAsync(array $args = [])
 * @method \Aws\Result listDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevicesAsync(array $args = [])
 * @method \Aws\Result listGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupsAsync(array $args = [])
 * @method \Aws\Result listIdentityProviders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdentityProvidersAsync(array $args = [])
 * @method \Aws\Result listResourceServers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceServersAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listUserImportJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUserImportJobsAsync(array $args = [])
 * @method \Aws\Result listUserPoolClients(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUserPoolClientsAsync(array $args = [])
 * @method \Aws\Result listUserPools(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUserPoolsAsync(array $args = [])
 * @method \Aws\Result listUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \Aws\Result listUsersInGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsersInGroupAsync(array $args = [])
 * @method \Aws\Result resendConfirmationCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resendConfirmationCodeAsync(array $args = [])
 * @method \Aws\Result respondToAuthChallenge(array $args = [])
 * @method \GuzzleHttp\Promise\Promise respondToAuthChallengeAsync(array $args = [])
 * @method \Aws\Result setRiskConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setRiskConfigurationAsync(array $args = [])
 * @method \Aws\Result setUICustomization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setUICustomizationAsync(array $args = [])
 * @method \Aws\Result setUserMFAPreference(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setUserMFAPreferenceAsync(array $args = [])
 * @method \Aws\Result setUserPoolMfaConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setUserPoolMfaConfigAsync(array $args = [])
 * @method \Aws\Result setUserSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setUserSettingsAsync(array $args = [])
 * @method \Aws\Result signUp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise signUpAsync(array $args = [])
 * @method \Aws\Result startUserImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startUserImportJobAsync(array $args = [])
 * @method \Aws\Result stopUserImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopUserImportJobAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateAuthEventFeedback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAuthEventFeedbackAsync(array $args = [])
 * @method \Aws\Result updateDeviceStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDeviceStatusAsync(array $args = [])
 * @method \Aws\Result updateGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGroupAsync(array $args = [])
 * @method \Aws\Result updateIdentityProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIdentityProviderAsync(array $args = [])
 * @method \Aws\Result updateResourceServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResourceServerAsync(array $args = [])
 * @method \Aws\Result updateUserAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserAttributesAsync(array $args = [])
 * @method \Aws\Result updateUserPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserPoolAsync(array $args = [])
 * @method \Aws\Result updateUserPoolClient(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserPoolClientAsync(array $args = [])
 * @method \Aws\Result updateUserPoolDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserPoolDomainAsync(array $args = [])
 * @method \Aws\Result verifySoftwareToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifySoftwareTokenAsync(array $args = [])
 * @method \Aws\Result verifyUserAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyUserAttributeAsync(array $args = [])
 */
class CognitoIdentityProviderClient extends AwsClient {}
